<?php
namespace Magento\Catalog\Model\Indexer\Category\Product\Action\Rows;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Indexer\Category\Product\Action\Rows
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Category\Product\Action\Rows implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Config $config, ?\Magento\Framework\DB\Query\Generator $queryGenerator = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\Catalog\Model\Indexer\Category\Product\TableMaintainer $tableMaintainer = null, ?\Magento\Framework\Indexer\CacheContext $cacheContext = null, ?\Magento\Framework\Event\ManagerInterface $eventManager = null, ?\Magento\Framework\Indexer\IndexerRegistry $indexerRegistry = null, ?\Magento\Indexer\Model\WorkingStateProvider $workingStateProvider = null)
    {
        $this->___init();
        parent::__construct($resource, $storeManager, $config, $queryGenerator, $metadataPool, $tableMaintainer, $cacheContext, $eventManager, $indexerRegistry, $workingStateProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $entityIds = [], $useTempTable = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($entityIds, $useTempTable);
    }
}
