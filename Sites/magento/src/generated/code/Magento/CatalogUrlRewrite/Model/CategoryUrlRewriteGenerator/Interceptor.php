<?php
namespace Magento\CatalogUrlRewrite\Model\CategoryUrlRewriteGenerator;

/**
 * Interceptor class for @see \Magento\CatalogUrlRewrite\Model\CategoryUrlRewriteGenerator
 */
class Interceptor extends \Magento\CatalogUrlRewrite\Model\CategoryUrlRewriteGenerator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogUrlRewrite\Model\Category\CanonicalUrlRewriteGenerator $canonicalUrlRewriteGenerator, \Magento\CatalogUrlRewrite\Model\Category\CurrentUrlRewritesRegenerator $currentUrlRewritesRegenerator, \Magento\CatalogUrlRewrite\Model\Category\ChildrenUrlRewriteGenerator $childrenUrlRewriteGenerator, \Magento\CatalogUrlRewrite\Service\V1\StoreViewService $storeViewService, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, ?\Magento\UrlRewrite\Model\MergeDataProviderFactory $mergeDataProviderFactory = null)
    {
        $this->___init();
        parent::__construct($canonicalUrlRewriteGenerator, $currentUrlRewritesRegenerator, $childrenUrlRewriteGenerator, $storeViewService, $categoryRepository, $mergeDataProviderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function generate($category, $overrideStoreUrls = false, $rootCategoryId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generate');
        return $pluginInfo ? $this->___callPlugins('generate', func_get_args(), $pluginInfo) : parent::generate($category, $overrideStoreUrls, $rootCategoryId);
    }
}
