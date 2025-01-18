<?php

namespace Hiddentechies\Bizkick\Helper;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Template;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    protected $_storeManager;
    protected $logoblock;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context, 
        \Magento\Theme\Block\Html\Header\Logo $logoblock, 
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->logoblock = $logoblock;
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getBaseUrl() {
        return $this->_storeManager->getStore()->getBaseUrl();
    }

    public function getIsHome() {
        return $this->logoblock->isHomePage();
    }

    public function getMediaUrl() {
        return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
    }
    
    public function getConfigValue($value = '') {
        return $this->scopeConfig
                ->getValue($value, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}