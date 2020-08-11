<?php
namespace Magento\Catalog\Model\Indexer\Product\Category\Action\Rows;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Indexer\Product\Category\Action\Rows
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Product\Category\Action\Rows implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Config $config, ?\Magento\Framework\DB\Query\Generator $queryGenerator = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\Framework\Indexer\CacheContext $cacheContext = null, ?\Magento\Framework\Event\ManagerInterface $eventManager = null, ?\Magento\Framework\Indexer\IndexerRegistry $indexerRegistry = null)
    {
        $this->___init();
        parent::__construct($resource, $storeManager, $config, $queryGenerator, $metadataPool, $cacheContext, $eventManager, $indexerRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $entityIds = [], $useTempTable = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($entityIds, $useTempTable);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
