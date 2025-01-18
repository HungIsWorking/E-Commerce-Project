<?php
namespace Magento\User\Model\Backend\Config\ObserverConfig;

/**
 * Interceptor class for @see \Magento\User\Model\Backend\Config\ObserverConfig
 */
class Interceptor extends \Magento\User\Model\Backend\Config\ObserverConfig implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\ConfigInterface $backendConfig)
    {
        $this->___init();
        parent::__construct($backendConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function _isLatestPasswordExpired($latestPassword)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_isLatestPasswordExpired');
        return $pluginInfo ? $this->___callPlugins('_isLatestPasswordExpired', func_get_args(), $pluginInfo) : parent::_isLatestPasswordExpired($latestPassword);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminLockThreshold()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdminLockThreshold');
        return $pluginInfo ? $this->___callPlugins('getAdminLockThreshold', func_get_args(), $pluginInfo) : parent::getAdminLockThreshold();
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordChangeForced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPasswordChangeForced');
        return $pluginInfo ? $this->___callPlugins('isPasswordChangeForced', func_get_args(), $pluginInfo) : parent::isPasswordChangeForced();
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminPasswordLifetime()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdminPasswordLifetime');
        return $pluginInfo ? $this->___callPlugins('getAdminPasswordLifetime', func_get_args(), $pluginInfo) : parent::getAdminPasswordLifetime();
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxFailures()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMaxFailures');
        return $pluginInfo ? $this->___callPlugins('getMaxFailures', func_get_args(), $pluginInfo) : parent::getMaxFailures();
    }
}
