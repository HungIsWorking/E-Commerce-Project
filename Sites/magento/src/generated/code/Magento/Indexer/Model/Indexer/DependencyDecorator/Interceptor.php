<?php
namespace Magento\Indexer\Model\Indexer\DependencyDecorator;

/**
 * Interceptor class for @see \Magento\Indexer\Model\Indexer\DependencyDecorator
 */
class Interceptor extends \Magento\Indexer\Model\Indexer\DependencyDecorator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Indexer\IndexerInterface $indexer, \Magento\Framework\Indexer\Config\DependencyInfoProviderInterface $dependencyInfoProvider, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, ?\Magento\Indexer\Model\Indexer\DeferredCacheCleaner $cacheCleaner = null)
    {
        $this->___init();
        parent::__construct($indexer, $dependencyInfoProvider, $indexerRegistry, $cacheCleaner);
    }

    /**
     * {@inheritdoc}
     */
    public function __call(string $method, array $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getId() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getViewId() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getViewId');
        return $pluginInfo ? $this->___callPlugins('getViewId', func_get_args(), $pluginInfo) : parent::getViewId();
    }

    /**
     * {@inheritdoc}
     */
    public function getActionClass() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionClass');
        return $pluginInfo ? $this->___callPlugins('getActionClass', func_get_args(), $pluginInfo) : parent::getActionClass();
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTitle');
        return $pluginInfo ? $this->___callPlugins('getTitle', func_get_args(), $pluginInfo) : parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDescription');
        return $pluginInfo ? $this->___callPlugins('getDescription', func_get_args(), $pluginInfo) : parent::getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function getFields() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFields');
        return $pluginInfo ? $this->___callPlugins('getFields', func_get_args(), $pluginInfo) : parent::getFields();
    }

    /**
     * {@inheritdoc}
     */
    public function getSources() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSources');
        return $pluginInfo ? $this->___callPlugins('getSources', func_get_args(), $pluginInfo) : parent::getSources();
    }

    /**
     * {@inheritdoc}
     */
    public function getHandlers() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHandlers');
        return $pluginInfo ? $this->___callPlugins('getHandlers', func_get_args(), $pluginInfo) : parent::getHandlers();
    }

    /**
     * {@inheritdoc}
     */
    public function load($indexerId) : \Magento\Indexer\Model\Indexer\DependencyDecorator
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($indexerId);
    }

    /**
     * {@inheritdoc}
     */
    public function getView() : \Magento\Framework\Mview\ViewInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getView');
        return $pluginInfo ? $this->___callPlugins('getView', func_get_args(), $pluginInfo) : parent::getView();
    }

    /**
     * {@inheritdoc}
     */
    public function getState() : \Magento\Framework\Indexer\StateInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getState');
        return $pluginInfo ? $this->___callPlugins('getState', func_get_args(), $pluginInfo) : parent::getState();
    }

    /**
     * {@inheritdoc}
     */
    public function setState(\Magento\Framework\Indexer\StateInterface $state) : \Magento\Indexer\Model\Indexer\DependencyDecorator
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setState');
        return $pluginInfo ? $this->___callPlugins('setState', func_get_args(), $pluginInfo) : parent::setState($state);
    }

    /**
     * {@inheritdoc}
     */
    public function isScheduled() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScheduled');
        return $pluginInfo ? $this->___callPlugins('isScheduled', func_get_args(), $pluginInfo) : parent::isScheduled();
    }

    /**
     * {@inheritdoc}
     */
    public function setScheduled($scheduled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setScheduled');
        return $pluginInfo ? $this->___callPlugins('setScheduled', func_get_args(), $pluginInfo) : parent::setScheduled($scheduled);
    }

    /**
     * {@inheritdoc}
     */
    public function isValid() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValid');
        return $pluginInfo ? $this->___callPlugins('isValid', func_get_args(), $pluginInfo) : parent::isValid();
    }

    /**
     * {@inheritdoc}
     */
    public function isInvalid() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInvalid');
        return $pluginInfo ? $this->___callPlugins('isInvalid', func_get_args(), $pluginInfo) : parent::isInvalid();
    }

    /**
     * {@inheritdoc}
     */
    public function isWorking() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isWorking');
        return $pluginInfo ? $this->___callPlugins('isWorking', func_get_args(), $pluginInfo) : parent::isWorking();
    }

    /**
     * {@inheritdoc}
     */
    public function invalidate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'invalidate');
        return $pluginInfo ? $this->___callPlugins('invalidate', func_get_args(), $pluginInfo) : parent::invalidate();
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatus');
        return $pluginInfo ? $this->___callPlugins('getStatus', func_get_args(), $pluginInfo) : parent::getStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestUpdated() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLatestUpdated');
        return $pluginInfo ? $this->___callPlugins('getLatestUpdated', func_get_args(), $pluginInfo) : parent::getLatestUpdated();
    }

    /**
     * {@inheritdoc}
     */
    public function reindexAll()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexAll');
        return $pluginInfo ? $this->___callPlugins('reindexAll', func_get_args(), $pluginInfo) : parent::reindexAll();
    }

    /**
     * {@inheritdoc}
     */
    public function reindexRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexRow');
        return $pluginInfo ? $this->___callPlugins('reindexRow', func_get_args(), $pluginInfo) : parent::reindexRow($id);
    }

    /**
     * {@inheritdoc}
     */
    public function reindexList($ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexList');
        return $pluginInfo ? $this->___callPlugins('reindexList', func_get_args(), $pluginInfo) : parent::reindexList($ids);
    }
}
