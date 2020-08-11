<?php
namespace Magento\Bundle\Model\LinkManagement;

/**
 * Interceptor class for @see \Magento\Bundle\Model\LinkManagement
 */
class Interceptor extends \Magento\Bundle\Model\LinkManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Bundle\Api\Data\LinkInterfaceFactory $linkFactory, \Magento\Bundle\Model\SelectionFactory $bundleSelection, \Magento\Bundle\Model\ResourceModel\BundleFactory $bundleFactory, \Magento\Bundle\Model\ResourceModel\Option\CollectionFactory $optionCollection, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\EntityManager\MetadataPool $metadataPool)
    {
        $this->___init();
        parent::__construct($productRepository, $linkFactory, $bundleSelection, $bundleFactory, $optionCollection, $storeManager, $dataObjectHelper, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren($productSku, $optionId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        if (!$pluginInfo) {
            return parent::getChildren($productSku, $optionId);
        } else {
            return $this->___callPlugins('getChildren', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addChildByProductSku($sku, $optionId, \Magento\Bundle\Api\Data\LinkInterface $linkedProduct)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChildByProductSku');
        if (!$pluginInfo) {
            return parent::addChildByProductSku($sku, $optionId, $linkedProduct);
        } else {
            return $this->___callPlugins('addChildByProductSku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveChild($sku, \Magento\Bundle\Api\Data\LinkInterface $linkedProduct)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveChild');
        if (!$pluginInfo) {
            return parent::saveChild($sku, $linkedProduct);
        } else {
            return $this->___callPlugins('saveChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addChild(\Magento\Catalog\Api\Data\ProductInterface $product, $optionId, \Magento\Bundle\Api\Data\LinkInterface $linkedProduct)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChild');
        if (!$pluginInfo) {
            return parent::addChild($product, $optionId, $linkedProduct);
        } else {
            return $this->___callPlugins('addChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeChild($sku, $optionId, $childSku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeChild');
        if (!$pluginInfo) {
            return parent::removeChild($sku, $optionId, $childSku);
        } else {
            return $this->___callPlugins('removeChild', func_get_args(), $pluginInfo);
        }
    }
}
