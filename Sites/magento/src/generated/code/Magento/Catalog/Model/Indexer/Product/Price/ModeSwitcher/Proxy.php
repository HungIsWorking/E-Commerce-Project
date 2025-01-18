<?php
namespace Magento\Catalog\Model\Indexer\Product\Price\ModeSwitcher;

/**
 * Proxy class for @see \Magento\Catalog\Model\Indexer\Product\Price\ModeSwitcher
 */
class Proxy extends \Magento\Catalog\Model\Indexer\Product\Price\ModeSwitcher implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Catalog\Model\Indexer\Product\Price\ModeSwitcher
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Catalog\\Model\\Indexer\\Product\\Price\\ModeSwitcher', $shared = true)
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
     * @return \Magento\Catalog\Model\Indexer\Product\Price\ModeSwitcher
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
    public function getDimensionModes() : \Magento\Indexer\Model\DimensionModes
    {
        return $this->_getSubject()->getDimensionModes();
    }

    /**
     * {@inheritdoc}
     */
    public function switchMode(string $currentMode, string $previousMode)
    {
        return $this->_getSubject()->switchMode($currentMode, $previousMode);
    }

    /**
     * {@inheritdoc}
     */
    public function createTables(string $currentMode)
    {
        return $this->_getSubject()->createTables($currentMode);
    }

    /**
     * {@inheritdoc}
     */
    public function moveData(string $currentMode, string $previousMode)
    {
        return $this->_getSubject()->moveData($currentMode, $previousMode);
    }

    /**
     * {@inheritdoc}
     */
    public function dropTables(string $previousMode)
    {
        return $this->_getSubject()->dropTables($previousMode);
    }
}
