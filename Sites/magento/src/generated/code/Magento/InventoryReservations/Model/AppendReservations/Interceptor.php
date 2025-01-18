<?php
namespace Magento\InventoryReservations\Model\AppendReservations;

/**
 * Interceptor class for @see \Magento\InventoryReservations\Model\AppendReservations
 */
class Interceptor extends \Magento\InventoryReservations\Model\AppendReservations implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryReservations\Model\ResourceModel\SaveMultiple $saveMultiple, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($saveMultiple, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $reservations) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($reservations);
    }
}
