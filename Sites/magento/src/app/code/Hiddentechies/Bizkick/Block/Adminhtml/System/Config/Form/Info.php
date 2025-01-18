<?php

/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Hiddentechies\Bizkick\Block\Adminhtml\System\Config\Form;

use Magento\Store\Model\ScopeInterface;

class Info extends \Magento\Config\Block\System\Config\Form\Field {

    protected $moduleList;

    public function __construct(
    \Magento\Framework\Module\ModuleListInterface $moduleList, \Magento\Backend\Block\Template\Context $context, array $data = []
    ) {
        parent::__construct($context, $data);
        $this->moduleList = $moduleList;
    }

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
        $m = $this->moduleList->getOne($this->getModuleName());

        $html = '<div style="padding:12px;background-color:#F1F1F1;border:1px solid #d1d1d1;margin-bottom:5px;font-weight: 600;">
            BizKick: Free Responsive Theme <span style="color: #7b0707;">v' . $m['setup_version'] . '</span> was developed by <a href="http://www.hiddentechies.com/" target="_blank">HiddenTechies</a>.
        </div>';

        if (in_array('curl', get_loaded_extensions())) {

            // Define the path for latest notifications
            $file = 'https://www.hiddentechies.com/documentation/notifications/latest_notifications.xml';
            define('LATEST_NOTIFICATIONS_FILE', $file);

            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, LATEST_NOTIFICATIONS_FILE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $response = curl_exec($ch);
            $errmsg = curl_error($ch);
            $curlInfo = curl_getinfo($ch);
            curl_close($ch);

            if ($errmsg == '') {
                $xml = simplexml_load_string($response);
                $title = $xml->item->title;
                $content_info = $xml->item->content_info;

                $html .= '<div class="display-ht-notifications">';
                $html .= $content_info;
                $html .= '</div>';
            }
        }

        return $html;
    }
}