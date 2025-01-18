<?php
namespace Magento\Vault\Model\PaymentTokenRepository;

/**
 * Interceptor class for @see \Magento\Vault\Model\PaymentTokenRepository
 */
class Interceptor extends \Magento\Vault\Model\PaymentTokenRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Vault\Model\ResourceModel\PaymentToken $resourceModel, \Magento\Vault\Model\PaymentTokenFactory $paymentTokenFactory, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Vault\Api\Data\PaymentTokenSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Vault\Model\ResourceModel\PaymentToken\CollectionFactory $collectionFactory, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null)
    {
        $this->___init();
        parent::__construct($resourceModel, $paymentTokenFactory, $filterBuilder, $searchCriteriaBuilder, $searchResultsFactory, $collectionFactory, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }

    /**
     * {@inheritdoc}
     */
    public function getById($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getById');
        return $pluginInfo ? $this->___callPlugins('getById', func_get_args(), $pluginInfo) : parent::getById($entityId);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($paymentToken);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($paymentToken);
    }
}
