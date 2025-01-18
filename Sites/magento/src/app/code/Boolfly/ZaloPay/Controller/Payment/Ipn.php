<?php
namespace Boolfly\ZaloPay\Controller\Payment;

use Boolfly\ZaloPay\Gateway\Helper\TransactionReader;
use Magento\Checkout\Model\Session;
use Magento\Framework\App\Request\Http as HttpRequest;
use Magento\Framework\Controller\Result\Json;
use Magento\Payment\Gateway\Command\CommandPoolInterface;
use Magento\Payment\Gateway\Data\PaymentDataObjectFactory;
use Magento\Payment\Gateway\Helper\ContextHelper;
use Magento\Sales\Api\OrderRepositoryInterface;
use Magento\Payment\Model\MethodInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\OrderFactory;
use Magento\Payment\Model\InfoInterface;
use Magento\Framework\Serialize\Serializer\Json as SerializerJson;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\App\Request\InvalidRequestException;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\CsrfAwareActionInterface;

/**
 * Class Ipn
 *
 * @package Boolfly\ZaloPay\Controller\Payment
 */
class Ipn implements CsrfAwareActionInterface, HttpPostActionInterface
{
    /**
     * @var CommandPoolInterface
     */
    private $commandPool;

    /**
     * @var Session
     */
    private $checkoutSession;

    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;

    /**
     * @var MethodInterface
     */
    private $method;

    /**
     * @var PaymentDataObjectFactory
     */
    private $paymentDataObjectFactory;

    /**
     * @var OrderFactory
     */
    private $orderFactory;

    /**
     * @var SerializerJson
     */
    private $serializer;

    /**
     * @var ResultFactory
     */
    private $resultFactory;

    /**
     * @var HttpRequest
     */
    private $request;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var ManagerInterface
     */
    private $messageManager;

    /**
     * Ipn constructor.
     *
     * @param Session                  $checkoutSession
     * @param MethodInterface          $method
     * @param PaymentDataObjectFactory $paymentDataObjectFactory
     * @param OrderRepositoryInterface $orderRepository
     * @param OrderFactory             $orderFactory
     * @param SerializerJson           $serializer
     * @param CommandPoolInterface     $commandPool
     * @param ResultFactory            $resultFactory
     * @param HttpRequest              $request
     * @param LoggerInterface          $logger
     * @param ManagerInterface         $messageManager
     */
    public function __construct(
        Session $checkoutSession,
        MethodInterface $method,
        PaymentDataObjectFactory $paymentDataObjectFactory,
        OrderRepositoryInterface $orderRepository,
        OrderFactory $orderFactory,
        SerializerJson $serializer,
        CommandPoolInterface $commandPool,
        ResultFactory $resultFactory,
        HttpRequest $request,
        LoggerInterface $logger,
        ManagerInterface $messageManager
    ) {
        $this->commandPool              = $commandPool;
        $this->checkoutSession          = $checkoutSession;
        $this->orderRepository          = $orderRepository;
        $this->method                   = $method;
        $this->paymentDataObjectFactory = $paymentDataObjectFactory;
        $this->orderFactory             = $orderFactory;
        $this->serializer               = $serializer;
        $this->resultFactory            = $resultFactory;
        $this->request                  = $request;
        $this->logger                   = $logger;
        $this->messageManager           = $messageManager;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|Json|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        // Use $this->request, which is now an instance of HttpRequest
        if ($this->request->getMethod() !== 'POST') {
            return;
        }

        /** @var Json $resultJson */
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $data       = [
            'errors' => true,
            'messages' => __('Something went wrong while executing.')
        ];

        try {
            $response = $this->request->getContent();
            if ($response && is_string($response)) {
                $response               = $this->serializer->unserialize($response);
                $response['trans_data'] = $this->serializer->unserialize($response['data']);
            }
            $orderIncrementId = TransactionReader::readOrderId($response);
            $order            = $this->orderFactory->create()->loadByIncrementId($orderIncrementId);
            $payment          = $order->getPayment();
            if (!$payment instanceof InfoInterface) {
                throw new \InvalidArgumentException('Invalid payment type');
            }
            ContextHelper::assertOrderPayment($payment);
            
            if ($payment->getMethod() === $this->method->getCode()
                && $order->getState() === Order::STATE_PENDING_PAYMENT) {
                $paymentDataObject = $this->paymentDataObjectFactory->create($payment);
                $this->commandPool->get('ipn')->execute(
                    [
                        'payment' => $paymentDataObject,
                        'response' => $response,
                        'is_ipn' => true,
                        'amount' => $order->getTotalDue()
                    ]
                );
                $data = [
                    'errors' => false,
                    'messages' => __('Success')
                ];
            }
        } catch (\Exception $e) {
            $this->logger->critical($e->getMessage()); // Use injected logger here
            $this->messageManager->addErrorMessage(__('Transaction has been declined. Please try again later.'));
            $resultJson->setHttpResponseCode(500);
        }

        return $resultJson->setData($data);
    }

    /**
     * Create exception in case CSRF validation failed.
     * Return null if default exception will suffice.
     *
     * @param RequestInterface $request
     * @return InvalidRequestException|null
     */
    public function createCsrfValidationException(RequestInterface $request): ?InvalidRequestException
    {
        // Returning null as default behavior
        return null;
    }

    /**
     * Perform custom request validation.
     * Return null if default validation is needed.
     *
     * @param RequestInterface $request
     *
     * @return boolean|null
     */
    public function validateForCsrf(RequestInterface $request): ?bool
    {
        return true;
    }
}
