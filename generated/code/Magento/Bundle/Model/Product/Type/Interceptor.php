<?php
namespace Magento\Bundle\Model\Product\Type;

/**
 * Interceptor class for @see \Magento\Bundle\Model\Product\Type
 */
class Interceptor extends \Magento\Bundle\Model\Product\Type implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Option $catalogProductOption, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Registry $coreRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Helper\Product $catalogProduct, \Magento\Catalog\Helper\Data $catalogData, \Magento\Bundle\Model\SelectionFactory $bundleModelSelection, \Magento\Bundle\Model\ResourceModel\BundleFactory $bundleFactory, \Magento\Bundle\Model\ResourceModel\Selection\CollectionFactory $bundleCollection, \Magento\Catalog\Model\Config $config, \Magento\Bundle\Model\ResourceModel\Selection $bundleSelection, \Magento\Bundle\Model\OptionFactory $bundleOption, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockStateInterface $stockState, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\Bundle\Model\ResourceModel\Selection\Collection\FilterApplier $selectionCollectionFilterApplier = null, ?\Magento\Framework\Stdlib\ArrayUtils $arrayUtility = null)
    {
        $this->___init();
        parent::__construct($catalogProductOption, $eavConfig, $catalogProductType, $eventManager, $fileStorageDb, $filesystem, $coreRegistry, $logger, $productRepository, $catalogProduct, $catalogData, $bundleModelSelection, $bundleFactory, $bundleCollection, $config, $bundleSelection, $bundleOption, $storeManager, $priceCurrency, $stockRegistry, $stockState, $serializer, $metadataPool, $selectionCollectionFilterApplier, $arrayUtility);
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelationInfo');
        if (!$pluginInfo) {
            return parent::getRelationInfo();
        } else {
            return $this->___callPlugins('getRelationInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenIds($parentId, $required = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenIds');
        if (!$pluginInfo) {
            return parent::getChildrenIds($parentId, $required);
        } else {
            return $this->___callPlugins('getChildrenIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentIdsByChild($childId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentIdsByChild');
        if (!$pluginInfo) {
            return parent::getParentIdsByChild($childId);
        } else {
            return $this->___callPlugins('getParentIdsByChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSku($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSku');
        if (!$pluginInfo) {
            return parent::getSku($product);
        } else {
            return $this->___callPlugins('getSku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWeight($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeight');
        if (!$pluginInfo) {
            return parent::getWeight($product);
        } else {
            return $this->___callPlugins('getWeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isVirtual($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVirtual');
        if (!$pluginInfo) {
            return parent::isVirtual($product);
        } else {
            return $this->___callPlugins('isVirtual', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        if (!$pluginInfo) {
            return parent::beforeSave($product);
        } else {
            return $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        if (!$pluginInfo) {
            return parent::getOptions($product);
        } else {
            return $this->___callPlugins('getOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsIds($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionsIds');
        if (!$pluginInfo) {
            return parent::getOptionsIds($product);
        } else {
            return $this->___callPlugins('getOptionsIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsCollection($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionsCollection');
        if (!$pluginInfo) {
            return parent::getOptionsCollection($product);
        } else {
            return $this->___callPlugins('getOptionsCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectionsCollection($optionIds, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectionsCollection');
        if (!$pluginInfo) {
            return parent::getSelectionsCollection($optionIds, $product);
        } else {
            return $this->___callPlugins('getSelectionsCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateQtyOption($options, \Magento\Framework\DataObject $option, $value, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateQtyOption');
        if (!$pluginInfo) {
            return parent::updateQtyOption($options, $option, $value, $product);
        } else {
            return $this->___callPlugins('updateQtyOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareQuoteItemQty($qty, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareQuoteItemQty');
        if (!$pluginInfo) {
            return parent::prepareQuoteItemQty($qty, $product);
        } else {
            return $this->___callPlugins('prepareQuoteItemQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSalable($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSalable');
        if (!$pluginInfo) {
            return parent::isSalable($product);
        } else {
            return $this->___callPlugins('isSalable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecifyOptionMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSpecifyOptionMessage');
        if (!$pluginInfo) {
            return parent::getSpecifyOptionMessage();
        } else {
            return $this->___callPlugins('getSpecifyOptionMessage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectionsByIds($selectionIds, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectionsByIds');
        if (!$pluginInfo) {
            return parent::getSelectionsByIds($selectionIds, $product);
        } else {
            return $this->___callPlugins('getSelectionsByIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsByIds($optionIds, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionsByIds');
        if (!$pluginInfo) {
            return parent::getOptionsByIds($optionIds, $product);
        } else {
            return $this->___callPlugins('getOptionsByIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderOptions');
        if (!$pluginInfo) {
            return parent::getOrderOptions($product);
        } else {
            return $this->___callPlugins('getOrderOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function shakeSelections($firstItem, $secondItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shakeSelections');
        if (!$pluginInfo) {
            return parent::shakeSelections($firstItem, $secondItem);
        } else {
            return $this->___callPlugins('shakeSelections', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasOptions');
        if (!$pluginInfo) {
            return parent::hasOptions($product);
        } else {
            return $this->___callPlugins('hasOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getForceChildItemQtyChanges($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForceChildItemQtyChanges');
        if (!$pluginInfo) {
            return parent::getForceChildItemQtyChanges($product);
        } else {
            return $this->___callPlugins('getForceChildItemQtyChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchableData($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearchableData');
        if (!$pluginInfo) {
            return parent::getSearchableData($product);
        } else {
            return $this->___callPlugins('getSearchableData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkProductBuyState($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkProductBuyState');
        if (!$pluginInfo) {
            return parent::checkProductBuyState($product);
        } else {
            return $this->___callPlugins('checkProductBuyState', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsToPurchaseByReqGroups($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsToPurchaseByReqGroups');
        if (!$pluginInfo) {
            return parent::getProductsToPurchaseByReqGroups($product);
        } else {
            return $this->___callPlugins('getProductsToPurchaseByReqGroups', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processBuyRequest($product, $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processBuyRequest');
        if (!$pluginInfo) {
            return parent::processBuyRequest($product, $buyRequest);
        } else {
            return $this->___callPlugins('processBuyRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canConfigure($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canConfigure');
        if (!$pluginInfo) {
            return parent::canConfigure($product);
        } else {
            return $this->___callPlugins('canConfigure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteTypeSpecificData');
        if (!$pluginInfo) {
            return parent::deleteTypeSpecificData($product);
        } else {
            return $this->___callPlugins('deleteTypeSpecificData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        if (!$pluginInfo) {
            return parent::getIdentities($product);
        } else {
            return $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTypeId($typeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTypeId');
        if (!$pluginInfo) {
            return parent::setTypeId($typeId);
        } else {
            return $this->___callPlugins('setTypeId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSetAttributes($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSetAttributes');
        if (!$pluginInfo) {
            return parent::getSetAttributes($product);
        } else {
            return $this->___callPlugins('getSetAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributesCompare($attributeOne, $attributeTwo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'attributesCompare');
        if (!$pluginInfo) {
            return parent::attributesCompare($attributeOne, $attributeTwo);
        } else {
            return $this->___callPlugins('attributesCompare', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEditableAttributes($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEditableAttributes');
        if (!$pluginInfo) {
            return parent::getEditableAttributes($product);
        } else {
            return $this->___callPlugins('getEditableAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeById($attributeId, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeById');
        if (!$pluginInfo) {
            return parent::getAttributeById($attributeId, $product);
        } else {
            return $this->___callPlugins('getAttributeById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processConfiguration(\Magento\Framework\DataObject $buyRequest, $product, $processMode = 'lite')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processConfiguration');
        if (!$pluginInfo) {
            return parent::processConfiguration($buyRequest, $product, $processMode);
        } else {
            return $this->___callPlugins('processConfiguration', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareForCartAdvanced(\Magento\Framework\DataObject $buyRequest, $product, $processMode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareForCartAdvanced');
        if (!$pluginInfo) {
            return parent::prepareForCartAdvanced($buyRequest, $product, $processMode);
        } else {
            return $this->___callPlugins('prepareForCartAdvanced', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareForCart(\Magento\Framework\DataObject $buyRequest, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareForCart');
        if (!$pluginInfo) {
            return parent::prepareForCart($buyRequest, $product);
        } else {
            return $this->___callPlugins('prepareForCart', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processFileQueue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processFileQueue');
        if (!$pluginInfo) {
            return parent::processFileQueue();
        } else {
            return $this->___callPlugins('processFileQueue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addFileQueue($queueOptions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFileQueue');
        if (!$pluginInfo) {
            return parent::addFileQueue($queueOptions);
        } else {
            return $this->___callPlugins('addFileQueue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($product);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isComposite($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isComposite');
        if (!$pluginInfo) {
            return parent::isComposite($product);
        } else {
            return $this->___callPlugins('isComposite', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canUseQtyDecimals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseQtyDecimals');
        if (!$pluginInfo) {
            return parent::canUseQtyDecimals();
        } else {
            return $this->___callPlugins('canUseQtyDecimals', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionSku($product, $sku = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionSku');
        if (!$pluginInfo) {
            return parent::getOptionSku($product, $sku);
        } else {
            return $this->___callPlugins('getOptionSku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasRequiredOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasRequiredOptions');
        if (!$pluginInfo) {
            return parent::hasRequiredOptions($product);
        } else {
            return $this->___callPlugins('hasRequiredOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreFilter($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreFilter');
        if (!$pluginInfo) {
            return parent::getStoreFilter($product);
        } else {
            return $this->___callPlugins('getStoreFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreFilter($store, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreFilter');
        if (!$pluginInfo) {
            return parent::setStoreFilter($store, $product);
        } else {
            return $this->___callPlugins('setStoreFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function assignProductToOption($optionProduct, $option, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assignProductToOption');
        if (!$pluginInfo) {
            return parent::assignProductToOption($optionProduct, $option, $product);
        } else {
            return $this->___callPlugins('assignProductToOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setConfig($config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConfig');
        if (!$pluginInfo) {
            return parent::setConfig($config);
        } else {
            return $this->___callPlugins('setConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkProductConfiguration($product, $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkProductConfiguration');
        if (!$pluginInfo) {
            return parent::checkProductConfiguration($product, $buyRequest);
        } else {
            return $this->___callPlugins('checkProductConfiguration', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasWeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasWeight');
        if (!$pluginInfo) {
            return parent::hasWeight();
        } else {
            return $this->___callPlugins('hasWeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setImageFromChildProduct(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setImageFromChildProduct');
        if (!$pluginInfo) {
            return parent::setImageFromChildProduct($product);
        } else {
            return $this->___callPlugins('setImageFromChildProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociatedProducts($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAssociatedProducts');
        if (!$pluginInfo) {
            return parent::getAssociatedProducts($product);
        } else {
            return $this->___callPlugins('getAssociatedProducts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isPossibleBuyFromList($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPossibleBuyFromList');
        if (!$pluginInfo) {
            return parent::isPossibleBuyFromList($product);
        } else {
            return $this->___callPlugins('isPossibleBuyFromList', func_get_args(), $pluginInfo);
        }
    }
}
