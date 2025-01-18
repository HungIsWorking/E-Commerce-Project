<?php
namespace Boolfly\ZaloPay\Gateway\Validator;

use Boolfly\ZaloPay\Gateway\Helper\Authorization;
use Boolfly\ZaloPay\Gateway\Helper\Rate;
use Boolfly\ZaloPay\Gateway\Request\AbstractDataBuilder;
use Magento\Payment\Gateway\Helper\SubjectReader;
use Magento\Payment\Gateway\Validator\ResultInterfaceFactory;
use Magento\Sales\Model\Order\Payment as OrderPayment;
use Magento\Framework\Exception\LocalizedException;

/**
 * Class CompleteValidator
 *
 * @package Boolfly\ZaloPay\Gateway\Validator
 */
class CompleteValidator extends AbstractResponseValidator
{

    /**
     * CompleteValidator constructor.
     *
     * @param ResultInterfaceFactory $resultFactory
     * @param Authorization          $authorization
     * @param Rate                   $helperRate
     */
    public function __construct(
        ResultInterfaceFactory $resultFactory,
        Authorization $authorization,
        Rate $helperRate
    ) {
        parent::__construct($resultFactory, $authorization, $helperRate);
    }

    /**
     * @param array $validationSubject
     * @return \Magento\Payment\Gateway\Validator\ResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function validate(array $validationSubject)
    {
        $response         = SubjectReader::readResponse($validationSubject);
        $amount           = round(SubjectReader::readAmount($validationSubject), 2);
        $paymentDO        = SubjectReader::readPayment($validationSubject);
        $payment          = $paymentDO->getPayment();

        // Ensure the payment is of the correct type to access the order
        if (!$payment instanceof OrderPayment) {
            throw new LocalizedException(__('Invalid payment object.'));
        }

        // Now get the order object from the payment
        $order = $payment->getOrder();

        // Convert the amount to the correct currency and format
        $amount = $this->helperRate->getVndAmount($order, $amount);

        // Validate the response
        $validationResult = $this->validateTotalAmount($response, $amount)
            && $this->validateTransactionId($response)
            && $this->validateMac($response);

        $errorMessages = [];
        if (!$validationResult) {
            $errorMessages = [__('Transaction has been declined. Please try again later.')];
        }

        return $this->createResult($validationResult, $errorMessages);
    }

    /**
     * Validate Mac By Key 2
     *
     * @param $response
     * @return boolean
     */
    protected function validateMac($response)
    {
        $macKey2 = $this->authorization->getMacKey2($response['data']);
        return $response[AbstractDataBuilder::MAC] === $macKey2;
    }

    /**
     * Validate total amount.
     *
     * @param array               $response
     * @param array|number|string $amount
     * @return boolean
     */
    protected function validateTotalAmount(array $response, $amount)
    {
        return isset($response[AbstractDataBuilder::TRANS_DATA][self::TOTAL_AMOUNT])
            && (string)($response[AbstractDataBuilder::TRANS_DATA][self::TOTAL_AMOUNT]) === (string)$amount;
    }
}
