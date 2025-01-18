<?php
namespace Magento\Backend\Model\Url;

/**
 * Interceptor class for @see \Magento\Backend\Model\Url
 */
class Interceptor extends \Magento\Backend\Model\Url implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Route\ConfigInterface $routeConfig, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Url\SecurityInfoInterface $urlSecurityInfo, \Magento\Framework\Url\ScopeResolverInterface $scopeResolver, \Magento\Framework\Session\Generic $session, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Url\RouteParamsResolverFactory $routeParamsResolverFactory, \Magento\Framework\Url\QueryParamsResolverInterface $queryParamsResolver, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Url\RouteParamsPreprocessorInterface $routeParamsPreprocessor, $scopeType, \Magento\Backend\Helper\Data $backendHelper, \Magento\Backend\Model\Menu\Config $menuConfig, \Magento\Framework\App\CacheInterface $cache, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Store\Model\StoreFactory $storeFactory, \Magento\Framework\Data\Form\FormKey $formKey, array $data = [], ?\Magento\Framework\Url\HostChecker $hostChecker = null, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($routeConfig, $request, $urlSecurityInfo, $scopeResolver, $session, $sidResolver, $routeParamsResolverFactory, $queryParamsResolver, $scopeConfig, $routeParamsPreprocessor, $scopeType, $backendHelper, $menuConfig, $cache, $authSession, $encryptor, $storeFactory, $formKey, $data, $hostChecker, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($routePath = null, $routeParams = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($routePath, $routeParams);
    }

    /**
     * {@inheritdoc}
     */
    public function getSecretKey($routeName = null, $controller = null, $action = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSecretKey');
        return $pluginInfo ? $this->___callPlugins('getSecretKey', func_get_args(), $pluginInfo) : parent::getSecretKey($routeName, $controller, $action);
    }

    /**
     * {@inheritdoc}
     */
    public function useSecretKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'useSecretKey');
        return $pluginInfo ? $this->___callPlugins('useSecretKey', func_get_args(), $pluginInfo) : parent::useSecretKey();
    }

    /**
     * {@inheritdoc}
     */
    public function turnOnSecretKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'turnOnSecretKey');
        return $pluginInfo ? $this->___callPlugins('turnOnSecretKey', func_get_args(), $pluginInfo) : parent::turnOnSecretKey();
    }

    /**
     * {@inheritdoc}
     */
    public function turnOffSecretKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'turnOffSecretKey');
        return $pluginInfo ? $this->___callPlugins('turnOffSecretKey', func_get_args(), $pluginInfo) : parent::turnOffSecretKey();
    }

    /**
     * {@inheritdoc}
     */
    public function renewSecretUrls()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renewSecretUrls');
        return $pluginInfo ? $this->___callPlugins('renewSecretUrls', func_get_args(), $pluginInfo) : parent::renewSecretUrls();
    }

    /**
     * {@inheritdoc}
     */
    public function getStartupPageUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStartupPageUrl');
        return $pluginInfo ? $this->___callPlugins('getStartupPageUrl', func_get_args(), $pluginInfo) : parent::getStartupPageUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function findFirstAvailableMenu()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findFirstAvailableMenu');
        return $pluginInfo ? $this->___callPlugins('findFirstAvailableMenu', func_get_args(), $pluginInfo) : parent::findFirstAvailableMenu();
    }

    /**
     * {@inheritdoc}
     */
    public function setScope($scopeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setScope');
        return $pluginInfo ? $this->___callPlugins('setScope', func_get_args(), $pluginInfo) : parent::setScope($scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function setSession(\Magento\Backend\Model\Auth\Session $session)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSession');
        return $pluginInfo ? $this->___callPlugins('setSession', func_get_args(), $pluginInfo) : parent::setSession($session);
    }

    /**
     * {@inheritdoc}
     */
    public function getAreaFrontName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAreaFrontName');
        return $pluginInfo ? $this->___callPlugins('getAreaFrontName', func_get_args(), $pluginInfo) : parent::getAreaFrontName();
    }

    /**
     * {@inheritdoc}
     */
    public function setUseSession($useSession)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseSession');
        return $pluginInfo ? $this->___callPlugins('setUseSession', func_get_args(), $pluginInfo) : parent::setUseSession($useSession);
    }

    /**
     * {@inheritdoc}
     */
    public function getUseSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseSession');
        return $pluginInfo ? $this->___callPlugins('getUseSession', func_get_args(), $pluginInfo) : parent::getUseSession();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigData($key, $prefix = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigData');
        return $pluginInfo ? $this->___callPlugins('getConfigData', func_get_args(), $pluginInfo) : parent::getConfigData($key, $prefix);
    }

    /**
     * {@inheritdoc}
     */
    public function setRequest(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRequest');
        return $pluginInfo ? $this->___callPlugins('setRequest', func_get_args(), $pluginInfo) : parent::setRequest($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl($params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseUrl');
        return $pluginInfo ? $this->___callPlugins('getBaseUrl', func_get_args(), $pluginInfo) : parent::getBaseUrl($params);
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteUrl($routePath = null, $routeParams = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRouteUrl');
        return $pluginInfo ? $this->___callPlugins('getRouteUrl', func_get_args(), $pluginInfo) : parent::getRouteUrl($routePath, $routeParams);
    }

    /**
     * {@inheritdoc}
     */
    public function addSessionParam()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addSessionParam');
        return $pluginInfo ? $this->___callPlugins('addSessionParam', func_get_args(), $pluginInfo) : parent::addSessionParam();
    }

    /**
     * {@inheritdoc}
     */
    public function addQueryParams(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addQueryParams');
        return $pluginInfo ? $this->___callPlugins('addQueryParams', func_get_args(), $pluginInfo) : parent::addQueryParams($data);
    }

    /**
     * {@inheritdoc}
     */
    public function setQueryParam($key, $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQueryParam');
        return $pluginInfo ? $this->___callPlugins('setQueryParam', func_get_args(), $pluginInfo) : parent::setQueryParam($key, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getRebuiltUrl($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRebuiltUrl');
        return $pluginInfo ? $this->___callPlugins('getRebuiltUrl', func_get_args(), $pluginInfo) : parent::getRebuiltUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function escape($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escape');
        return $pluginInfo ? $this->___callPlugins('escape', func_get_args(), $pluginInfo) : parent::escape($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getDirectUrl($url, $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDirectUrl');
        return $pluginInfo ? $this->___callPlugins('getDirectUrl', func_get_args(), $pluginInfo) : parent::getDirectUrl($url, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function sessionUrlVar($html)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sessionUrlVar');
        return $pluginInfo ? $this->___callPlugins('sessionUrlVar', func_get_args(), $pluginInfo) : parent::sessionUrlVar($html);
    }

    /**
     * {@inheritdoc}
     */
    public function useSessionIdForUrl($secure = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'useSessionIdForUrl');
        return $pluginInfo ? $this->___callPlugins('useSessionIdForUrl', func_get_args(), $pluginInfo) : parent::useSessionIdForUrl($secure);
    }

    /**
     * {@inheritdoc}
     */
    public function isOwnOriginUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOwnOriginUrl');
        return $pluginInfo ? $this->___callPlugins('isOwnOriginUrl', func_get_args(), $pluginInfo) : parent::isOwnOriginUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectUrl($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRedirectUrl');
        return $pluginInfo ? $this->___callPlugins('getRedirectUrl', func_get_args(), $pluginInfo) : parent::getRedirectUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentUrl');
        return $pluginInfo ? $this->___callPlugins('getCurrentUrl', func_get_args(), $pluginInfo) : parent::getCurrentUrl();
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
