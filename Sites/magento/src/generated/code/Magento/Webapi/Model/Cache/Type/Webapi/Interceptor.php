<?php
namespace Magento\Webapi\Model\Cache\Type\Webapi;

/**
 * Interceptor class for @see \Magento\Webapi\Model\Cache\Type\Webapi
 */
class Interceptor extends \Magento\Webapi\Model\Cache\Type\Webapi implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Cache\Type\FrontendPool $cacheFrontendPool, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Authorization\Model\UserContextInterface $userContext)
    {
        $this->___init();
        parent::__construct($cacheFrontendPool, $storeManager, $userContext);
    }

    /**
     * {@inheritdoc}
     */
    public function generateCacheIdUsingContext($prefix)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateCacheIdUsingContext');
        return $pluginInfo ? $this->___callPlugins('generateCacheIdUsingContext', func_get_args(), $pluginInfo) : parent::generateCacheIdUsingContext($prefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTag');
        return $pluginInfo ? $this->___callPlugins('getTag', func_get_args(), $pluginInfo) : parent::getTag();
    }

    /**
     * {@inheritdoc}
     */
    public function save($data, $identifier, array $tags = [], $lifeTime = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($data, $identifier, $tags, $lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    public function clean($mode = 'all', array $tags = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clean');
        return $pluginInfo ? $this->___callPlugins('clean', func_get_args(), $pluginInfo) : parent::clean($mode, $tags);
    }

    /**
     * {@inheritdoc}
     */
    public function test($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'test');
        return $pluginInfo ? $this->___callPlugins('test', func_get_args(), $pluginInfo) : parent::test($identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function load($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function remove($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'remove');
        return $pluginInfo ? $this->___callPlugins('remove', func_get_args(), $pluginInfo) : parent::remove($identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function getBackend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackend');
        return $pluginInfo ? $this->___callPlugins('getBackend', func_get_args(), $pluginInfo) : parent::getBackend();
    }

    /**
     * {@inheritdoc}
     */
    public function getLowLevelFrontend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLowLevelFrontend');
        return $pluginInfo ? $this->___callPlugins('getLowLevelFrontend', func_get_args(), $pluginInfo) : parent::getLowLevelFrontend();
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
