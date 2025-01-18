<?php
namespace Magento\Config\Model\Config\Structure;

/**
 * Interceptor class for @see \Magento\Config\Model\Config\Structure
 */
class Interceptor extends \Magento\Config\Model\Config\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Structure\Data $structureData, \Magento\Config\Model\Config\Structure\Element\Iterator\Tab $tabIterator, \Magento\Config\Model\Config\Structure\Element\FlyweightFactory $flyweightFactory, \Magento\Config\Model\Config\ScopeDefiner $scopeDefiner)
    {
        $this->___init();
        parent::__construct($structureData, $tabIterator, $flyweightFactory, $scopeDefiner);
    }

    /**
     * {@inheritdoc}
     */
    public function getTabs()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTabs');
        return $pluginInfo ? $this->___callPlugins('getTabs', func_get_args(), $pluginInfo) : parent::getTabs();
    }

    /**
     * {@inheritdoc}
     */
    public function getSectionList()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSectionList');
        return $pluginInfo ? $this->___callPlugins('getSectionList', func_get_args(), $pluginInfo) : parent::getSectionList();
    }

    /**
     * {@inheritdoc}
     */
    public function getElement($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElement');
        return $pluginInfo ? $this->___callPlugins('getElement', func_get_args(), $pluginInfo) : parent::getElement($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementByConfigPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementByConfigPath');
        return $pluginInfo ? $this->___callPlugins('getElementByConfigPath', func_get_args(), $pluginInfo) : parent::getElementByConfigPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstSection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstSection');
        return $pluginInfo ? $this->___callPlugins('getFirstSection', func_get_args(), $pluginInfo) : parent::getFirstSection();
    }

    /**
     * {@inheritdoc}
     */
    public function getElementByPathParts(array $pathParts)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementByPathParts');
        return $pluginInfo ? $this->___callPlugins('getElementByPathParts', func_get_args(), $pluginInfo) : parent::getElementByPathParts($pathParts);
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldPathsByAttribute($attributeName, $attributeValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldPathsByAttribute');
        return $pluginInfo ? $this->___callPlugins('getFieldPathsByAttribute', func_get_args(), $pluginInfo) : parent::getFieldPathsByAttribute($attributeName, $attributeValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldPaths()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldPaths');
        return $pluginInfo ? $this->___callPlugins('getFieldPaths', func_get_args(), $pluginInfo) : parent::getFieldPaths();
    }
}
