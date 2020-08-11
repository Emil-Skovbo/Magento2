<?php
namespace Magento\Catalog\Model\Product\Option\Repository;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Option\Repository
 */
class Interceptor extends \Magento\Catalog\Model\Product\Option\Repository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Model\ResourceModel\Product\Option $optionResource, \Magento\Catalog\Model\Product\Option\Converter $converter, ?\Magento\Catalog\Model\ResourceModel\Product\Option\CollectionFactory $collectionFactory = null, ?\Magento\Catalog\Model\Product\OptionFactory $optionFactory = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null)
    {
        $this->___init();
        parent::__construct($productRepository, $optionResource, $converter, $collectionFactory, $optionFactory, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function getList($sku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        if (!$pluginInfo) {
            return parent::getList($sku);
        } else {
            return $this->___callPlugins('getList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductOptions(\Magento\Catalog\Api\Data\ProductInterface $product, $requiredOnly = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductOptions');
        if (!$pluginInfo) {
            return parent::getProductOptions($product, $requiredOnly);
        } else {
            return $this->___callPlugins('getProductOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get($sku, $optionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($sku, $optionId);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Catalog\Api\Data\ProductCustomOptionInterface $entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($entity);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function duplicate(\Magento\Catalog\Api\Data\ProductInterface $product, \Magento\Catalog\Api\Data\ProductInterface $duplicate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'duplicate');
        if (!$pluginInfo) {
            return parent::duplicate($product, $duplicate);
        } else {
            return $this->___callPlugins('duplicate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Catalog\Api\Data\ProductCustomOptionInterface $option)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($option);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteByIdentifier($sku, $optionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteByIdentifier');
        if (!$pluginInfo) {
            return parent::deleteByIdentifier($sku, $optionId);
        } else {
            return $this->___callPlugins('deleteByIdentifier', func_get_args(), $pluginInfo);
        }
    }
}
