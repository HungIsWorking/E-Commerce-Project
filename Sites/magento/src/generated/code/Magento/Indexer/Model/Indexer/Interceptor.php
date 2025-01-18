<?php
namespace Magento\Indexer\Model\Indexer;

/**
 * Interceptor class for @see \Magento\Indexer\Model\Indexer
 */
class Interceptor extends \Magento\Indexer\Model\Indexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Indexer\ConfigInterface $config, \Magento\Framework\Indexer\ActionFactory $actionFactory, \Magento\Framework\Indexer\StructureFactory $structureFactory, \Magento\Framework\Mview\ViewInterface $view, \Magento\Indexer\Model\Indexer\StateFactory $stateFactory, \Magento\Indexer\Model\Indexer\CollectionFactory $indexersFactory, \Magento\Indexer\Model\WorkingStateProvider $workingStateProvider, \Magento\Framework\Indexer\IndexerInterfaceFactory $indexerFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($config, $actionFactory, $structureFactory, $view, $stateFactory, $indexersFactory, $workingStateProvider, $indexerFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        return $pluginInfo ? $this->___callPlugins('setId', func_get_args(), $pluginInfo) : parent::setId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setIdFieldName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIdFieldName');
        return $pluginInfo ? $this->___callPlugins('setIdFieldName', func_get_args(), $pluginInfo) : parent::setIdFieldName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        return $pluginInfo ? $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo) : parent::getIdFieldName();
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
    public function getActionClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionClass');
        return $pluginInfo ? $this->___callPlugins('getActionClass', func_get_args(), $pluginInfo) : parent::getActionClass();
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTitle');
        return $pluginInfo ? $this->___callPlugins('getTitle', func_get_args(), $pluginInfo) : parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDescription');
        return $pluginInfo ? $this->___callPlugins('getDescription', func_get_args(), $pluginInfo) : parent::getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFields');
        return $pluginInfo ? $this->___callPlugins('getFields', func_get_args(), $pluginInfo) : parent::getFields();
    }

    /**
     * {@inheritdoc}
     */
    public function getSources()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSources');
        return $pluginInfo ? $this->___callPlugins('getSources', func_get_args(), $pluginInfo) : parent::getSources();
    }

    /**
     * {@inheritdoc}
     */
    public function getHandlers()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHandlers');
        return $pluginInfo ? $this->___callPlugins('getHandlers', func_get_args(), $pluginInfo) : parent::getHandlers();
    }

    /**
     * {@inheritdoc}
     */
    public function load($indexerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($indexerId);
    }

    /**
     * {@inheritdoc}
     */
    public function getView()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getView');
        return $pluginInfo ? $this->___callPlugins('getView', func_get_args(), $pluginInfo) : parent::getView();
    }

    /**
     * {@inheritdoc}
     */
    public function getState()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getState');
        return $pluginInfo ? $this->___callPlugins('getState', func_get_args(), $pluginInfo) : parent::getState();
    }

    /**
     * {@inheritdoc}
     */
    public function setState(\Magento\Framework\Indexer\StateInterface $state)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setState');
        return $pluginInfo ? $this->___callPlugins('setState', func_get_args(), $pluginInfo) : parent::setState($state);
    }

    /**
     * {@inheritdoc}
     */
    public function isScheduled()
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
    public function isValid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValid');
        return $pluginInfo ? $this->___callPlugins('isValid', func_get_args(), $pluginInfo) : parent::isValid();
    }

    /**
     * {@inheritdoc}
     */
    public function isInvalid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInvalid');
        return $pluginInfo ? $this->___callPlugins('isInvalid', func_get_args(), $pluginInfo) : parent::isInvalid();
    }

    /**
     * {@inheritdoc}
     */
    public function isSuspended() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSuspended');
        return $pluginInfo ? $this->___callPlugins('isSuspended', func_get_args(), $pluginInfo) : parent::isSuspended();
    }

    /**
     * {@inheritdoc}
     */
    public function isWorking()
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
    public function getStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatus');
        return $pluginInfo ? $this->___callPlugins('getStatus', func_get_args(), $pluginInfo) : parent::getStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestUpdated()
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

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function __debugInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__debugInfo');
        return $pluginInfo ? $this->___callPlugins('__debugInfo', func_get_args(), $pluginInfo) : parent::__debugInfo();
    }
}
