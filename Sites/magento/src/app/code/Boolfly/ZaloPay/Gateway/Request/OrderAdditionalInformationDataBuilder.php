<?php
namespace Boolfly\ZaloPay\Gateway\Request;

use Boolfly\ZaloPay\Gateway\Helper\Rate;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Payment\Gateway\Helper\SubjectReader;
use Magento\Payment\Gateway\Request\BuilderInterface;
use Magento\Sales\Api\OrderRepositoryInterface;

/**
 * Class OrderAdditionalInformationDataBuilder
 *
 * @package Boolfly\ZaloPay\Gateway\Request
 */
class OrderAdditionalInformationDataBuilder extends AbstractDataBuilder implements BuilderInterface
{
    /**
     * Zalo Pay App
     */
    const ZALOPAY_APP = 'zalopayapp';

    /**
     * Desc Text
     */
    const DESCRIPTION_TEXT = 'ZaloPay Integration for Magento 2';

    /**
     * @var Json
     */
    private $serializer;

    /**
     * @var Rate
     */
    private $helperRate;

    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;

    /**
     * OrderAdditionalInformationDataBuilder constructor.
     *
     * @param Json $serializer
     * @param Rate $helperRate
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(
        Json $serializer,
        Rate $helperRate,
        OrderRepositoryInterface $orderRepository
    ) {
        $this->serializer = $serializer;
        $this->helperRate = $helperRate;
        $this->orderRepository = $orderRepository;
    }

    /**
     * @param array $buildSubject
     * @return array
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function build(array $buildSubject)
    {
        // Read the payment and order data from buildSubject
        $paymentDataObject = SubjectReader::readPayment($buildSubject);

        // Get the OrderAdapterInterface object and retrieve the order ID
        $orderAdapter = $paymentDataObject->getOrder();
        $orderId = $orderAdapter->getId();

        // Use the OrderRepositoryInterface to get the full Magento\Sales\Model\Order object
        $order = $this->orderRepository->get($orderId);

        // Build the result array
        return [
            self::EMBED_DATA => $this->serializer->serialize($this->getEmbedData()),
            self::AMOUNT => (int) $this->helperRate->getVndAmount($order, round((float)SubjectReader::readAmount($buildSubject), 2)),
            self::DESCRIPTION => self::DESCRIPTION_TEXT,
            self::BANK_CODE => self::ZALOPAY_APP
        ];
    }

    /**
     * @return array
     */
    private function getEmbedData()
    {
        return [
            'merchantinfo' => 'boolfly'
        ];
    }
}
