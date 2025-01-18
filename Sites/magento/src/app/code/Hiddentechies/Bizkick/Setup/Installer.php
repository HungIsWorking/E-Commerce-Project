<?php

/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Hiddentechies\Bizkick\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface {

    /**
     * @var \Magento\CmsSampleData\Model\Page
     */
    private $page;

    /**
     * @var \Magento\CmsSampleData\Model\Block
     */
    private $block;

    /**
     * @param \Hiddentechies\Bizkick\Model\Page $page
     * @param \Hiddentechies\Bizkick\Model\Block $block
     */
    public function __construct(
    \Hiddentechies\Bizkick\Model\Page $page, 
            \Hiddentechies\Bizkick\Model\Block $block
    ) {
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install() {

        //$this->page->install(['Hiddentechies_Bizkick::fixtures/pages/pages.csv']);
        $this->page->install(
                [

                    'Hiddentechies_Bizkick::DemoPages/pages.csv',
                ]
        );
        $this->block->install(
                [

                    'Hiddentechies_Bizkick::DemoBlocks/blocks.csv',
                ]
        );
    }

}
