<?php
namespace Psr\Log\LoggerInterface;

/**
 * Proxy class for @see \Psr\Log\LoggerInterface
 */
class Proxy implements \Psr\Log\LoggerInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Psr\Log\LoggerInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Psr\\Log\\LoggerInterface', $shared = true)
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
     * @return \Psr\Log\LoggerInterface
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
    public function emergency(\Stringable|string $message, array $context = []) : void
    {
        $this->_getSubject()->emergency($message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function alert(\Stringable|string $message, array $context = []) : void
    {
        $this->_getSubject()->alert($message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function critical(\Stringable|string $message, array $context = []) : void
    {
        $this->_getSubject()->critical($message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function error(\Stringable|string $message, array $context = []) : void
    {
        $this->_getSubject()->error($message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function warning(\Stringable|string $message, array $context = []) : void
    {
        $this->_getSubject()->warning($message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function notice(\Stringable|string $message, array $context = []) : void
    {
        $this->_getSubject()->notice($message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function info(\Stringable|string $message, array $context = []) : void
    {
        $this->_getSubject()->info($message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function debug(\Stringable|string $message, array $context = []) : void
    {
        $this->_getSubject()->debug($message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function log($level, \Stringable|string $message, array $context = []) : void
    {
        $this->_getSubject()->log($level, $message, $context);
    }
}
