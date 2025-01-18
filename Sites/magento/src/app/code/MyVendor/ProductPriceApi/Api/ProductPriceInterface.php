<?php
namespace MyVendor\ProductPriceApi\Api;

interface ProductPriceInterface
{
    /**
     * Get product price by SKU
     * @param string $sku
     * @return float
     */
    public function getProductPrice($sku);
}
