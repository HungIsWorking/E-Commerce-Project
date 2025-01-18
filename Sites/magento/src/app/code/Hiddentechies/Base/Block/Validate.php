<?php

namespace Hiddentechies\Base\Block;

class Validate extends \Magento\Framework\View\Element\Template {

    public function __construct(
    \Magento\Catalog\Block\Product\Context $context, array $data = []
    ) {

        parent::__construct($context, $data);
    }

    protected function _prepareLayout() {
        return parent::_prepareLayout();
    }

}
