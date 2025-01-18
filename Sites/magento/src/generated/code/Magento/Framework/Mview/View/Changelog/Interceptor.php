<?php
namespace Magento\Framework\Mview\View\Changelog;

/**
 * Interceptor class for @see \Magento\Framework\Mview\View\Changelog
 */
class Interceptor extends \Magento\Framework\Mview\View\Changelog implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\Mview\Config $mviewConfig, \Magento\Framework\Mview\View\AdditionalColumnsProcessor\ProcessorFactory $additionalColumnsProcessorFactory)
    {
        $this->___init();
        parent::__construct($resource, $mviewConfig, $additionalColumnsProcessorFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create();
    }

    /**
     * {@inheritdoc}
     */
    public function drop()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'drop');
        return $pluginInfo ? $this->___callPlugins('drop', func_get_args(), $pluginInfo) : parent::drop();
    }

    /**
     * {@inheritdoc}
     */
    public function clear($versionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clear');
        return $pluginInfo ? $this->___callPlugins('clear', func_get_args(), $pluginInfo) : parent::clear($versionId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList($fromVersionId, $toVersionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($fromVersionId, $toVersionId);
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVersion');
        return $pluginInfo ? $this->___callPlugins('getVersion', func_get_args(), $pluginInfo) : parent::getVersion();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnName');
        return $pluginInfo ? $this->___callPlugins('getColumnName', func_get_args(), $pluginInfo) : parent::getColumnName();
    }

    /**
     * {@inheritdoc}
     */
    public function setViewId($viewId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setViewId');
        return $pluginInfo ? $this->___callPlugins('setViewId', func_get_args(), $pluginInfo) : parent::setViewId($viewId);
    }

    /**
     * {@inheritdoc}
     */
    public function getViewId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getViewId');
        return $pluginInfo ? $this->___callPlugins('getViewId', func_get_args(), $pluginInfo) : parent::getViewId();
    }

    /**
     * {@inheritdoc}
     */
    public function addList(array $ids) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addList');
        $pluginInfo ? $this->___callPlugins('addList', func_get_args(), $pluginInfo) : parent::addList($ids);
    }
}
