<?php
namespace MyVendor\ProductPriceApi\Model;

use Magento\Catalog\Api\ProductRepositoryInterface;
use MyVendor\ProductPriceApi\Api\ProductPriceInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\LocalizedException;

class ProductPrice implements ProductPriceInterface
{
    protected $productRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository
    ) {
        $this->productRepository = $productRepository;
    }

    /**
     * @inheritdoc
     */
    public function getProductPrice($sku)
    {
        try {
            // Fetch the product by SKU
            $product = $this->productRepository->get($sku);

            // Return detailed product information
            return [
                'success' => true,
                'data' => [
                    'sku' => $product->getSku(),
                    'name' => $product->getName(),
                    'price' => $product->getPrice(),
                    'status' => $product->getStatus(),
                    'visibility' => $product->getVisibility(),
                    'type_id' => $product->getTypeId(),
                    'weight' => $product->getWeight(),
                    'created_at' => $product->getCreatedAt(),
                    'updated_at' => $product->getUpdatedAt(),
                ],
            ];
        } catch (NoSuchEntityException $e) {
            // Product not found
            return [
                'success' => false,
                'error' => [
                    'message' => __('Product with SKU "%1" does not exist.', $sku),
                    'code' => 404
                ]
            ];
        } catch (LocalizedException $e) {
            // Localized exception for Magento-specific errors
            return [
                'success' => false,
                'error' => [
                    'message' => $e->getMessage(),
                    'code' => 400
                ]
            ];
        } catch (\Exception $e) {
            // Generic exception
            return [
                'success' => false,
                'error' => [
                    'message' => __('An error occurred while fetching the product.'),
                    'details' => $e->getMessage(),
                    'code' => 500
                ]
            ];
        }
    }
}
