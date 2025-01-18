<?php
namespace Magento\Framework\App\Cache\TypeList;

/**
 * Interceptor class for @see \Magento\Framework\App\Cache\TypeList
 */
class Interceptor extends \Magento\Framework\App\Cache\TypeList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Cache\ConfigInterface $config, \Magento\Framework\App\Cache\StateInterface $cacheState, \Magento\Framework\App\Cache\InstanceFactory $factory, \Magento\Framework\App\CacheInterface $cache, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($config, $cacheState, $factory, $cache, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypes');
        return $pluginInfo ? $this->___callPlugins('getTypes', func_get_args(), $pluginInfo) : parent::getTypes();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeLabels()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeLabels');
        return $pluginInfo ? $this->___callPlugins('getTypeLabels', func_get_args(), $pluginInfo) : parent::getTypeLabels();
    }

    /**
     * {@inheritdoc}
     */
    public function getInvalidated()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInvalidated');
        return $pluginInfo ? $this->___callPlugins('getInvalidated', func_get_args(), $pluginInfo) : parent::getInvalidated();
    }

    /**
     * {@inheritdoc}
     */
    public function invalidate($typeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'invalidate');
        return $pluginInfo ? $this->___callPlugins('invalidate', func_get_args(), $pluginInfo) : parent::invalidate($typeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function cleanType($typeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanType');
        return $pluginInfo ? $this->___callPlugins('cleanType', func_get_args(), $pluginInfo) : parent::cleanType($typeCode);
    }
}
