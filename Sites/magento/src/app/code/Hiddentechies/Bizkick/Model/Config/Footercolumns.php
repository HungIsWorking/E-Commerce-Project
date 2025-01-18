<?php

namespace Hiddentechies\Bizkick\Model\Config;

class Footercolumns implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * {@inheritdoc}
     *
     * @codeCoverageIgnore
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'quicklinks', 'label' => __('Quick Links')],
            ['value' => 'staticblock', 'label' => __('Static Block')]
        ];
    }
}
