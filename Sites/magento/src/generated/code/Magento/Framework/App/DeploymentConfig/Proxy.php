<?php
namespace Magento\Framework\App\DeploymentConfig;

/**
 * Proxy class for @see \Magento\Framework\App\DeploymentConfig
 */
class Proxy extends \Magento\Framework\App\DeploymentConfig implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Framework\App\DeploymentConfig
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\App\\DeploymentConfig', $shared = true)
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
     * @return \Magento\Framework\App\DeploymentConfig
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
    public function get($key = null, $defaultValue = null)
    {
        return $this->_getSubject()->get($key, $defaultValue);
    }

    /**
     * {@inheritdoc}
     */
    public function isAvailable()
    {
        return $this->_getSubject()->isAvailable();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigData($key = null)
    {
        return $this->_getSubject()->getConfigData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function resetData()
    {
        return $this->_getSubject()->resetData();
    }

    /**
     * {@inheritdoc}
     */
    public function isDbAvailable()
    {
        return $this->_getSubject()->isDbAvailable();
    }
}
