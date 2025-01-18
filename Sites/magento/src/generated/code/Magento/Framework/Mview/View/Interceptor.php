<?php
namespace Magento\Framework\Mview\View;

/**
 * Interceptor class for @see \Magento\Framework\Mview\View
 */
class Interceptor extends \Magento\Framework\Mview\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mview\ConfigInterface $config, \Magento\Framework\Mview\ActionFactory $actionFactory, \Magento\Framework\Mview\View\StateInterface $state, \Magento\Framework\Mview\View\ChangelogInterface $changelog, \Magento\Framework\Mview\View\SubscriptionFactory $subscriptionFactory, array $data = [], array $changelogBatchSize = [], ?\Magento\Framework\Mview\View\ChangelogBatchWalkerFactory $changelogBatchWalkerFactory = null)
    {
        $this->___init();
        parent::__construct($config, $actionFactory, $state, $changelog, $subscriptionFactory, $data, $changelogBatchSize, $changelogBatchWalkerFactory);
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
    public function getActionClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionClass');
        return $pluginInfo ? $this->___callPlugins('getActionClass', func_get_args(), $pluginInfo) : parent::getActionClass();
    }

    /**
     * {@inheritdoc}
     */
    public function getGroup()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroup');
        return $pluginInfo ? $this->___callPlugins('getGroup', func_get_args(), $pluginInfo) : parent::getGroup();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscriptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubscriptions');
        return $pluginInfo ? $this->___callPlugins('getSubscriptions', func_get_args(), $pluginInfo) : parent::getSubscriptions();
    }

    /**
     * {@inheritdoc}
     */
    public function load($viewId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($viewId);
    }

    /**
     * {@inheritdoc}
     */
    public function subscribe()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'subscribe');
        return $pluginInfo ? $this->___callPlugins('subscribe', func_get_args(), $pluginInfo) : parent::subscribe();
    }

    /**
     * {@inheritdoc}
     */
    public function unsubscribe()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsubscribe');
        return $pluginInfo ? $this->___callPlugins('unsubscribe', func_get_args(), $pluginInfo) : parent::unsubscribe();
    }

    /**
     * {@inheritdoc}
     */
    public function update()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        return $pluginInfo ? $this->___callPlugins('update', func_get_args(), $pluginInfo) : parent::update();
    }

    /**
     * {@inheritdoc}
     */
    public function suspend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'suspend');
        return $pluginInfo ? $this->___callPlugins('suspend', func_get_args(), $pluginInfo) : parent::suspend();
    }

    /**
     * {@inheritdoc}
     */
    public function resume()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resume');
        return $pluginInfo ? $this->___callPlugins('resume', func_get_args(), $pluginInfo) : parent::resume();
    }

    /**
     * {@inheritdoc}
     */
    public function clearChangelog()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearChangelog');
        return $pluginInfo ? $this->___callPlugins('clearChangelog', func_get_args(), $pluginInfo) : parent::clearChangelog();
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
    public function setState(\Magento\Framework\Mview\View\StateInterface $state)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setState');
        return $pluginInfo ? $this->___callPlugins('setState', func_get_args(), $pluginInfo) : parent::setState($state);
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabled');
        return $pluginInfo ? $this->___callPlugins('isEnabled', func_get_args(), $pluginInfo) : parent::isEnabled();
    }

    /**
     * {@inheritdoc}
     */
    public function isIdle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isIdle');
        return $pluginInfo ? $this->___callPlugins('isIdle', func_get_args(), $pluginInfo) : parent::isIdle();
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
    public function isSuspended()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSuspended');
        return $pluginInfo ? $this->___callPlugins('isSuspended', func_get_args(), $pluginInfo) : parent::isSuspended();
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdated()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdated');
        return $pluginInfo ? $this->___callPlugins('getUpdated', func_get_args(), $pluginInfo) : parent::getUpdated();
    }

    /**
     * {@inheritdoc}
     */
    public function getChangelog()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChangelog');
        return $pluginInfo ? $this->___callPlugins('getChangelog', func_get_args(), $pluginInfo) : parent::getChangelog();
    }

    /**
     * {@inheritdoc}
     */
    public function initSubscriptionInstance(array $subscriptionConfig) : \Magento\Framework\Mview\View\SubscriptionInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initSubscriptionInstance');
        return $pluginInfo ? $this->___callPlugins('initSubscriptionInstance', func_get_args(), $pluginInfo) : parent::initSubscriptionInstance($subscriptionConfig);
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
