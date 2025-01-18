<?php
namespace Magento\Config\App\Config\Source\DumpConfigSourceAggregated;

/**
 * Interceptor class for @see \Magento\Config\App\Config\Source\DumpConfigSourceAggregated
 */
class Interceptor extends \Magento\Config\App\Config\Source\DumpConfigSourceAggregated implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Export\ExcludeList $excludeList, array $sources = [], ?\Magento\Config\Model\Config\TypePool $typePool = null, array $rules = [])
    {
        $this->___init();
        parent::__construct($excludeList, $sources, $typePool, $rules);
    }

    /**
     * {@inheritdoc}
     */
    public function get($path = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getExcludedFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExcludedFields');
        return $pluginInfo ? $this->___callPlugins('getExcludedFields', func_get_args(), $pluginInfo) : parent::getExcludedFields();
    }
}
