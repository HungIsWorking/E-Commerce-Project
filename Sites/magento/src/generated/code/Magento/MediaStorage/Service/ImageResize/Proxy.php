<?php
namespace Magento\MediaStorage\Service\ImageResize;

/**
 * Proxy class for @see \Magento\MediaStorage\Service\ImageResize
 */
class Proxy extends \Magento\MediaStorage\Service\ImageResize implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\MediaStorage\Service\ImageResize
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\MediaStorage\\Service\\ImageResize', $shared = true)
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
     * @return \Magento\MediaStorage\Service\ImageResize
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
    public function resizeFromImageName(string $originalImageName)
    {
        return $this->_getSubject()->resizeFromImageName($originalImageName);
    }

    /**
     * {@inheritdoc}
     */
    public function resizeFromThemes(?array $themes = null, bool $skipHiddenImages = false) : \Generator
    {
        return $this->_getSubject()->resizeFromThemes($themes, $skipHiddenImages);
    }

    /**
     * {@inheritdoc}
     */
    public function getCountProductImages(bool $skipHiddenImages = false) : int
    {
        return $this->_getSubject()->getCountProductImages($skipHiddenImages);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductImages(bool $skipHiddenImages = false) : \Generator
    {
        return $this->_getSubject()->getProductImages($skipHiddenImages);
    }
}
