<?php
namespace Magento\DataExporter\Model\Indexer\FeedIndexer;

/**
 * Interceptor class for @see \Magento\DataExporter\Model\Indexer\FeedIndexer
 */
class Interceptor extends \Magento\DataExporter\Model\Indexer\FeedIndexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\DataExporter\Model\Indexer\FeedIndexProcessorInterface $processor, \Magento\DataExporter\Model\Indexer\DataSerializerInterface $serializer, \Magento\DataExporter\Model\Indexer\FeedIndexMetadata $feedIndexMetadata, \Magento\DataExporter\Model\Indexer\EntityIdsProviderInterface $entityIdsProvider, ?\Magento\DataExporter\Model\Logging\CommerceDataExportLoggerInterface $logger = null, ?\Magento\DataExporter\Lock\FeedLockManager $lockManager = null)
    {
        $this->___init();
        parent::__construct($processor, $serializer, $feedIndexMetadata, $entityIdsProvider, $logger, $lockManager);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        return $pluginInfo ? $this->___callPlugins('executeFull', func_get_args(), $pluginInfo) : parent::executeFull();
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        return $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        return $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($id);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function getFeedIndexMetadata() : \Magento\DataExporter\Model\Indexer\FeedIndexMetadata
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFeedIndexMetadata');
        return $pluginInfo ? $this->___callPlugins('getFeedIndexMetadata', func_get_args(), $pluginInfo) : parent::getFeedIndexMetadata();
    }
}
