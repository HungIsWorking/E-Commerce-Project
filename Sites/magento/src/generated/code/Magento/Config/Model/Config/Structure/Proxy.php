<?php
namespace Magento\Config\Model\Config\Structure;

/**
 * Proxy class for @see \Magento\Config\Model\Config\Structure
 */
class Proxy extends \Magento\Config\Model\Config\Structure implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Config\Model\Config\Structure
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Config\\Model\\Config\\Structure', $shared = true)
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
     * @return \Magento\Config\Model\Config\Structure
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
    public function getTabs()
    {
        return $this->_getSubject()->getTabs();
    }

    /**
     * {@inheritdoc}
     */
    public function getSectionList()
    {
        return $this->_getSubject()->getSectionList();
    }

    /**
     * {@inheritdoc}
     */
    public function getElement($path)
    {
        return $this->_getSubject()->getElement($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementByConfigPath($path)
    {
        return $this->_getSubject()->getElementByConfigPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstSection()
    {
        return $this->_getSubject()->getFirstSection();
    }

    /**
     * {@inheritdoc}
     */
    public function getElementByPathParts(array $pathParts)
    {
        return $this->_getSubject()->getElementByPathParts($pathParts);
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldPathsByAttribute($attributeName, $attributeValue)
    {
        return $this->_getSubject()->getFieldPathsByAttribute($attributeName, $attributeValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldPaths()
    {
        return $this->_getSubject()->getFieldPaths();
    }
}
