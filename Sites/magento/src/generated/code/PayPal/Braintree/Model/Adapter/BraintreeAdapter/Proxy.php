<?php
namespace PayPal\Braintree\Model\Adapter\BraintreeAdapter;

/**
 * Proxy class for @see \PayPal\Braintree\Model\Adapter\BraintreeAdapter
 */
class Proxy extends \PayPal\Braintree\Model\Adapter\BraintreeAdapter implements \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \PayPal\Braintree\Model\Adapter\BraintreeAdapter
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\PayPal\\Braintree\\Model\\Adapter\\BraintreeAdapter', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        if ($this->_subject) {
            $this->_subject = clone $this->_getSubject();
        }
    }

    /**
     * Debug proxied instance
     */
    public function __debugInfo()
    {
        return ['i' => $this->_subject];
    }

    /**
     * Get proxied instance
     *
     * @return \PayPal\Braintree\Model\Adapter\BraintreeAdapter
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function environment(?string $value = null)
    {
        return $this->_getSubject()->environment($value);
    }

    /**
     * {@inheritdoc}
     */
    public function merchantId(?string $value = null)
    {
        return $this->_getSubject()->merchantId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function publicKey(?string $value = null)
    {
        return $this->_getSubject()->publicKey($value);
    }

    /**
     * {@inheritdoc}
     */
    public function privateKey($value = null)
    {
        return $this->_getSubject()->privateKey($value);
    }

    /**
     * {@inheritdoc}
     */
    public function generate(array $params = [])
    {
        return $this->_getSubject()->generate($params);
    }

    /**
     * {@inheritdoc}
     */
    public function find(string $token)
    {
        return $this->_getSubject()->find($token);
    }

    /**
     * {@inheritdoc}
     */
    public function search(array $filters)
    {
        return $this->_getSubject()->search($filters);
    }

    /**
     * {@inheritdoc}
     */
    public function findById(string $id)
    {
        return $this->_getSubject()->findById($id);
    }

    /**
     * {@inheritdoc}
     */
    public function createNonce(string $token)
    {
        return $this->_getSubject()->createNonce($token);
    }

    /**
     * {@inheritdoc}
     */
    public function sale(array $attributes)
    {
        return $this->_getSubject()->sale($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function submitForSettlement(string $transactionId, $amount = null, $attribs = [])
    {
        return $this->_getSubject()->submitForSettlement($transactionId, $amount, $attribs);
    }

    /**
     * {@inheritdoc}
     */
    public function submitForPartialSettlement(string $transactionId, $amount = null, $attribs = [])
    {
        return $this->_getSubject()->submitForPartialSettlement($transactionId, $amount, $attribs);
    }

    /**
     * {@inheritdoc}
     */
    public function void(string $transactionId)
    {
        return $this->_getSubject()->void($transactionId);
    }

    /**
     * {@inheritdoc}
     */
    public function refund(string $transactionId, $amount = null)
    {
        return $this->_getSubject()->refund($transactionId, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function cloneTransaction(string $transactionId, array $attributes)
    {
        return $this->_getSubject()->cloneTransaction($transactionId, $attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function createPaymentMethod(array $attribs) : \Braintree\Result\Error|\Braintree\Result\Successful
    {
        return $this->_getSubject()->createPaymentMethod($attribs);
    }

    /**
     * {@inheritdoc}
     */
    public function deletePaymentMethod(string $token)
    {
        return $this->_getSubject()->deletePaymentMethod($token);
    }

    /**
     * {@inheritdoc}
     */
    public function updatePaymentMethod(string $token, array $attribs)
    {
        return $this->_getSubject()->updatePaymentMethod($token, $attribs);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerById(string $id)
    {
        return $this->_getSubject()->getCustomerById($id);
    }

    /**
     * {@inheritdoc}
     */
    public function createCustomer(array $attrs) : \Braintree\Result\Error|\Braintree\Result\Successful
    {
        return $this->_getSubject()->createCustomer($attrs);
    }

    /**
     * {@inheritdoc}
     */
    public function searchCustomers(array $filters) : \Braintree\ResourceCollection
    {
        return $this->_getSubject()->searchCustomers($filters);
    }
}
