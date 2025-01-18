<?php
namespace Magento\DataExporter\Model\Batch\FeedSource\Generator;

/**
 * Interceptor class for @see \Magento\DataExporter\Model\Batch\FeedSource\Generator
 */
class Interceptor extends \Magento\DataExporter\Model\Batch\FeedSource\Generator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\DataExporter\Model\Batch\FeedSource\IteratorFactory $iteratorFactory, \Magento\DataExporter\Model\Batch\BatchLocatorFactory $batchLocatorFactory, \Magento\DataExporter\Model\Batch\BatchTableFactory $batchTableFactory, \Magento\DataExporter\Model\Logging\CommerceDataExportLoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($resourceConnection, $iteratorFactory, $batchLocatorFactory, $batchTableFactory, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function generate(\Magento\DataExporter\Model\Indexer\FeedIndexMetadata $metadata, array $args = []) : \Magento\DataExporter\Model\Batch\BatchIteratorInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generate');
        return $pluginInfo ? $this->___callPlugins('generate', func_get_args(), $pluginInfo) : parent::generate($metadata, $args);
    }
}
