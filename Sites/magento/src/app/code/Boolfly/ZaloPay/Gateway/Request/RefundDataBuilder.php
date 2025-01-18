<?php
namespace Boolfly\ZaloPay\Gateway\Request;

use Boolfly\ZaloPay\Gateway\Helper\Rate;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Payment\Gateway\ConfigInterface;
use Magento\Payment\Gateway\Request\BuilderInterface;
use Magento\Payment\Gateway\Helper\SubjectReader;
use Magento\Sales\Model\Order\Payment as OrderPayment;

/**
 * Class RefundDataBuilder
 *
 * @package Boolfly\ZaloPay\Gateway\Request
 */
class RefundDataBuilder extends AbstractDataBuilder implements BuilderInterface
{
    /**
     * @var ConfigInterface
     */
    private $config;

    /**
     * @var Rate
     */
    private $helperRate;

    /**
     * @var DateTime
     */
    private $dateTime;

    /**
     * RefundDataBuilder constructor.
     *
     * @param ConfigInterface $config
     * @param DateTime        $dateTime
     * @param Rate            $helperRate
     */
    public function __construct(
        ConfigInterface $config,
        DateTime $dateTime,
        Rate $helperRate
    ) {
        $this->config     = $config;
        $this->helperRate = $helperRate;
        $this->dateTime   = $dateTime;
    }

    /**
     * @param array $buildSubject
     * @return array
     * @throws LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function build(array $buildSubject)
    {
        $paymentDO = SubjectReader::readPayment($buildSubject);
        $amount    = round((float)SubjectReader::readAmount($buildSubject), 2);
        $payment   = $paymentDO->getPayment();

        // Ensure that the payment object is an instance of OrderPayment to use getParentTransactionId
        if (!$payment instanceof OrderPayment) {
            throw new LocalizedException(__('The payment object is invalid.'));
        }

        $timestamp = $this->dateTime->timestamp() * 1000;
        $uid       = $timestamp . rand(111, 999);
        $appId     = $this->config->getValue(self::APP_ID);

        return [
            self::APP_ID => $appId,
            self::M_REFUND_ID => $this->dateTime->gmtDate('ymd') . '_' . $appId . '_' . $uid,
            self::TIMESTAMP => $timestamp,
            self::ZP_TRANS_ID => $payment->getParentTransactionId(),
            self::AMOUNT => (int) $this->helperRate->getVndAmount($payment->getOrder(), $amount),
            self::DESCRIPTION => 'ZaloPay Integration for Magento 2',
        ];
    }
}
