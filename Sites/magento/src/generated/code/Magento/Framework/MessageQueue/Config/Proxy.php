<?php
namespace Magento\Framework\MessageQueue\Config;

/**
 * Proxy class for @see \Magento\Framework\MessageQueue\Config
 */
class Proxy extends \Magento\Framework\MessageQueue\Config implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Framework\MessageQueue\Config
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\MessageQueue\\Config', $shared = true)
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
     * @return \Magento\Framework\MessageQueue\Config
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
    public function getExchangeByTopic($topicName)
    {
        return $this->_getSubject()->getExchangeByTopic($topicName);
    }

    /**
     * {@inheritdoc}
     */
    public function getQueuesByTopic($topic)
    {
        return $this->_getSubject()->getQueuesByTopic($topic);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnectionByTopic($topic)
    {
        return $this->_getSubject()->getConnectionByTopic($topic);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnectionByConsumer($consumer)
    {
        return $this->_getSubject()->getConnectionByConsumer($consumer);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessageSchemaType($topic)
    {
        return $this->_getSubject()->getMessageSchemaType($topic);
    }

    /**
     * {@inheritdoc}
     */
    public function getConsumerNames()
    {
        return $this->_getSubject()->getConsumerNames();
    }

    /**
     * {@inheritdoc}
     */
    public function getConsumer($name)
    {
        return $this->_getSubject()->getConsumer($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getBinds()
    {
        return $this->_getSubject()->getBinds();
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishers()
    {
        return $this->_getSubject()->getPublishers();
    }

    /**
     * {@inheritdoc}
     */
    public function getConsumers()
    {
        return $this->_getSubject()->getConsumers();
    }

    /**
     * {@inheritdoc}
     */
    public function getTopic($name)
    {
        return $this->_getSubject()->getTopic($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getPublisher($name)
    {
        return $this->_getSubject()->getPublisher($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseQueueName($topicName)
    {
        return $this->_getSubject()->getResponseQueueName($topicName);
    }
}
