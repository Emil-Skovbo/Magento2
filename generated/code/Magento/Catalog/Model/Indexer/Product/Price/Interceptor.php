<?php
namespace Magento\Catalog\Model\Indexer\Product\Price;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Indexer\Product\Price
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Product\Price implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Indexer\Product\Price\Action\Row $productPriceIndexerRow, \Magento\Catalog\Model\Indexer\Product\Price\Action\Rows $productPriceIndexerRows, \Magento\Catalog\Model\Indexer\Product\Price\Action\Full $productPriceIndexerFull, \Magento\Framework\Indexer\CacheContext $cacheContext)
    {
        $this->___init();
        parent::__construct($productPriceIndexerRow, $productPriceIndexerRows, $productPriceIndexerFull, $cacheContext);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($ids);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        if (!$pluginInfo) {
            return parent::executeFull();
        } else {
            return $this->___callPlugins('executeFull', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        if (!$pluginInfo) {
            return parent::executeList($ids);
        } else {
            return $this->___callPlugins('executeList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        if (!$pluginInfo) {
            return parent::executeRow($id);
        } else {
            return $this->___callPlugins('executeRow', func_get_args(), $pluginInfo);
        }
    }
}
