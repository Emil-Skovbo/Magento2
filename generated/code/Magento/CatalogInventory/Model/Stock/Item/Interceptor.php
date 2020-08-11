<?php
namespace Magento\CatalogInventory\Model\Stock\Item;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Stock\Item
 */
class Interceptor extends \Magento\CatalogInventory\Model\Stock\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockItemRepositoryInterface $stockItemRepository, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $customerSession, $storeManager, $stockConfiguration, $stockRegistry, $stockItemRepository, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemId');
        if (!$pluginInfo) {
            return parent::getItemId();
        } else {
            return $this->___callPlugins('getItemId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteId');
        if (!$pluginInfo) {
            return parent::getWebsiteId();
        } else {
            return $this->___callPlugins('getWebsiteId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStockId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockId');
        if (!$pluginInfo) {
            return parent::getStockId();
        } else {
            return $this->___callPlugins('getStockId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductId');
        if (!$pluginInfo) {
            return parent::getProductId();
        } else {
            return $this->___callPlugins('getProductId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStockStatusChangedAuto()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockStatusChangedAuto');
        if (!$pluginInfo) {
            return parent::getStockStatusChangedAuto();
        } else {
            return $this->___callPlugins('getStockStatusChangedAuto', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQty');
        if (!$pluginInfo) {
            return parent::getQty();
        } else {
            return $this->___callPlugins('getQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsInStock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsInStock');
        if (!$pluginInfo) {
            return parent::getIsInStock();
        } else {
            return $this->___callPlugins('getIsInStock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsQtyDecimal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsQtyDecimal');
        if (!$pluginInfo) {
            return parent::getIsQtyDecimal();
        } else {
            return $this->___callPlugins('getIsQtyDecimal', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsDecimalDivided()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsDecimalDivided');
        if (!$pluginInfo) {
            return parent::getIsDecimalDivided();
        } else {
            return $this->___callPlugins('getIsDecimalDivided', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLowStockDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLowStockDate');
        if (!$pluginInfo) {
            return parent::getLowStockDate();
        } else {
            return $this->___callPlugins('getLowStockDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getShowDefaultNotificationMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShowDefaultNotificationMessage');
        if (!$pluginInfo) {
            return parent::getShowDefaultNotificationMessage();
        } else {
            return $this->___callPlugins('getShowDefaultNotificationMessage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigMinQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigMinQty');
        if (!$pluginInfo) {
            return parent::getUseConfigMinQty();
        } else {
            return $this->___callPlugins('getUseConfigMinQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMinQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinQty');
        if (!$pluginInfo) {
            return parent::getMinQty();
        } else {
            return $this->___callPlugins('getMinQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigMinSaleQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigMinSaleQty');
        if (!$pluginInfo) {
            return parent::getUseConfigMinSaleQty();
        } else {
            return $this->___callPlugins('getUseConfigMinSaleQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMinSaleQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinSaleQty');
        if (!$pluginInfo) {
            return parent::getMinSaleQty();
        } else {
            return $this->___callPlugins('getMinSaleQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigMaxSaleQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigMaxSaleQty');
        if (!$pluginInfo) {
            return parent::getUseConfigMaxSaleQty();
        } else {
            return $this->___callPlugins('getUseConfigMaxSaleQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxSaleQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMaxSaleQty');
        if (!$pluginInfo) {
            return parent::getMaxSaleQty();
        } else {
            return $this->___callPlugins('getMaxSaleQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigNotifyStockQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigNotifyStockQty');
        if (!$pluginInfo) {
            return parent::getUseConfigNotifyStockQty();
        } else {
            return $this->___callPlugins('getUseConfigNotifyStockQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNotifyStockQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNotifyStockQty');
        if (!$pluginInfo) {
            return parent::getNotifyStockQty();
        } else {
            return $this->___callPlugins('getNotifyStockQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigEnableQtyInc()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigEnableQtyInc');
        if (!$pluginInfo) {
            return parent::getUseConfigEnableQtyInc();
        } else {
            return $this->___callPlugins('getUseConfigEnableQtyInc', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEnableQtyIncrements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEnableQtyIncrements');
        if (!$pluginInfo) {
            return parent::getEnableQtyIncrements();
        } else {
            return $this->___callPlugins('getEnableQtyIncrements', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigQtyIncrements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigQtyIncrements');
        if (!$pluginInfo) {
            return parent::getUseConfigQtyIncrements();
        } else {
            return $this->___callPlugins('getUseConfigQtyIncrements', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyIncrements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyIncrements');
        if (!$pluginInfo) {
            return parent::getQtyIncrements();
        } else {
            return $this->___callPlugins('getQtyIncrements', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigBackorders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigBackorders');
        if (!$pluginInfo) {
            return parent::getUseConfigBackorders();
        } else {
            return $this->___callPlugins('getUseConfigBackorders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBackorders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackorders');
        if (!$pluginInfo) {
            return parent::getBackorders();
        } else {
            return $this->___callPlugins('getBackorders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigManageStock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigManageStock');
        if (!$pluginInfo) {
            return parent::getUseConfigManageStock();
        } else {
            return $this->___callPlugins('getUseConfigManageStock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getManageStock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getManageStock');
        if (!$pluginInfo) {
            return parent::getManageStock();
        } else {
            return $this->___callPlugins('getManageStock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save();
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setProduct(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProduct');
        if (!$pluginInfo) {
            return parent::setProduct($product);
        } else {
            return $this->___callPlugins('setProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreId');
        if (!$pluginInfo) {
            return parent::setStoreId($value);
        } else {
            return $this->___callPlugins('setStoreId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreId');
        if (!$pluginInfo) {
            return parent::getStoreId();
        } else {
            return $this->___callPlugins('getStoreId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupId');
        if (!$pluginInfo) {
            return parent::getCustomerGroupId();
        } else {
            return $this->___callPlugins('getCustomerGroupId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerGroupId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerGroupId');
        if (!$pluginInfo) {
            return parent::setCustomerGroupId($value);
        } else {
            return $this->___callPlugins('setCustomerGroupId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setItemId($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItemId');
        if (!$pluginInfo) {
            return parent::setItemId($itemId);
        } else {
            return $this->___callPlugins('setItemId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setProductId($productId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductId');
        if (!$pluginInfo) {
            return parent::setProductId($productId);
        } else {
            return $this->___callPlugins('setProductId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setWebsiteId($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWebsiteId');
        if (!$pluginInfo) {
            return parent::setWebsiteId($websiteId);
        } else {
            return $this->___callPlugins('setWebsiteId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStockId($stockId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStockId');
        if (!$pluginInfo) {
            return parent::setStockId($stockId);
        } else {
            return $this->___callPlugins('setStockId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setQty($qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQty');
        if (!$pluginInfo) {
            return parent::setQty($qty);
        } else {
            return $this->___callPlugins('setQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsInStock($isInStock)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsInStock');
        if (!$pluginInfo) {
            return parent::setIsInStock($isInStock);
        } else {
            return $this->___callPlugins('setIsInStock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsQtyDecimal($isQtyDecimal)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsQtyDecimal');
        if (!$pluginInfo) {
            return parent::setIsQtyDecimal($isQtyDecimal);
        } else {
            return $this->___callPlugins('setIsQtyDecimal', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigMinQty($useConfigMinQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigMinQty');
        if (!$pluginInfo) {
            return parent::setUseConfigMinQty($useConfigMinQty);
        } else {
            return $this->___callPlugins('setUseConfigMinQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMinQty($minQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMinQty');
        if (!$pluginInfo) {
            return parent::setMinQty($minQty);
        } else {
            return $this->___callPlugins('setMinQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigMinSaleQty($useConfigMinSaleQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigMinSaleQty');
        if (!$pluginInfo) {
            return parent::setUseConfigMinSaleQty($useConfigMinSaleQty);
        } else {
            return $this->___callPlugins('setUseConfigMinSaleQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMinSaleQty($minSaleQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMinSaleQty');
        if (!$pluginInfo) {
            return parent::setMinSaleQty($minSaleQty);
        } else {
            return $this->___callPlugins('setMinSaleQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigMaxSaleQty($useConfigMaxSaleQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigMaxSaleQty');
        if (!$pluginInfo) {
            return parent::setUseConfigMaxSaleQty($useConfigMaxSaleQty);
        } else {
            return $this->___callPlugins('setUseConfigMaxSaleQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMaxSaleQty($maxSaleQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMaxSaleQty');
        if (!$pluginInfo) {
            return parent::setMaxSaleQty($maxSaleQty);
        } else {
            return $this->___callPlugins('setMaxSaleQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigBackorders($useConfigBackorders)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigBackorders');
        if (!$pluginInfo) {
            return parent::setUseConfigBackorders($useConfigBackorders);
        } else {
            return $this->___callPlugins('setUseConfigBackorders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBackorders($backOrders)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBackorders');
        if (!$pluginInfo) {
            return parent::setBackorders($backOrders);
        } else {
            return $this->___callPlugins('setBackorders', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigNotifyStockQty($useConfigNotifyStockQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigNotifyStockQty');
        if (!$pluginInfo) {
            return parent::setUseConfigNotifyStockQty($useConfigNotifyStockQty);
        } else {
            return $this->___callPlugins('setUseConfigNotifyStockQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setNotifyStockQty($notifyStockQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNotifyStockQty');
        if (!$pluginInfo) {
            return parent::setNotifyStockQty($notifyStockQty);
        } else {
            return $this->___callPlugins('setNotifyStockQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigQtyIncrements($useConfigQtyIncrements)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigQtyIncrements');
        if (!$pluginInfo) {
            return parent::setUseConfigQtyIncrements($useConfigQtyIncrements);
        } else {
            return $this->___callPlugins('setUseConfigQtyIncrements', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyIncrements($qtyIncrements)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyIncrements');
        if (!$pluginInfo) {
            return parent::setQtyIncrements($qtyIncrements);
        } else {
            return $this->___callPlugins('setQtyIncrements', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigEnableQtyInc($useConfigEnableQtyInc)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigEnableQtyInc');
        if (!$pluginInfo) {
            return parent::setUseConfigEnableQtyInc($useConfigEnableQtyInc);
        } else {
            return $this->___callPlugins('setUseConfigEnableQtyInc', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEnableQtyIncrements($enableQtyIncrements)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEnableQtyIncrements');
        if (!$pluginInfo) {
            return parent::setEnableQtyIncrements($enableQtyIncrements);
        } else {
            return $this->___callPlugins('setEnableQtyIncrements', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigManageStock($useConfigManageStock)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigManageStock');
        if (!$pluginInfo) {
            return parent::setUseConfigManageStock($useConfigManageStock);
        } else {
            return $this->___callPlugins('setUseConfigManageStock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setManageStock($manageStock)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setManageStock');
        if (!$pluginInfo) {
            return parent::setManageStock($manageStock);
        } else {
            return $this->___callPlugins('setManageStock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setLowStockDate($lowStockDate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLowStockDate');
        if (!$pluginInfo) {
            return parent::setLowStockDate($lowStockDate);
        } else {
            return $this->___callPlugins('setLowStockDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsDecimalDivided($isDecimalDivided)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsDecimalDivided');
        if (!$pluginInfo) {
            return parent::setIsDecimalDivided($isDecimalDivided);
        } else {
            return $this->___callPlugins('setIsDecimalDivided', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStockStatusChangedAuto($stockStatusChangedAuto)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStockStatusChangedAuto');
        if (!$pluginInfo) {
            return parent::setStockStatusChangedAuto($stockStatusChangedAuto);
        } else {
            return $this->___callPlugins('setStockStatusChangedAuto', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExtensionAttributes');
        if (!$pluginInfo) {
            return parent::getExtensionAttributes();
        } else {
            return $this->___callPlugins('getExtensionAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setExtensionAttributes(\Magento\CatalogInventory\Api\Data\StockItemExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        if (!$pluginInfo) {
            return parent::setExtensionAttributes($extensionAttributes);
        } else {
            return $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributes');
        if (!$pluginInfo) {
            return parent::getCustomAttributes();
        } else {
            return $this->___callPlugins('getCustomAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttribute');
        if (!$pluginInfo) {
            return parent::getCustomAttribute($attributeCode);
        } else {
            return $this->___callPlugins('getCustomAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttributes(array $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttributes');
        if (!$pluginInfo) {
            return parent::setCustomAttributes($attributes);
        } else {
            return $this->___callPlugins('setCustomAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttribute($attributeCode, $attributeValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttribute');
        if (!$pluginInfo) {
            return parent::setCustomAttribute($attributeCode, $attributeValue);
        } else {
            return $this->___callPlugins('setCustomAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        if (!$pluginInfo) {
            return parent::setId($value);
        } else {
            return $this->___callPlugins('setId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIdFieldName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIdFieldName');
        if (!$pluginInfo) {
            return parent::setIdFieldName($name);
        } else {
            return $this->___callPlugins('setIdFieldName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        if (!$pluginInfo) {
            return parent::getIdFieldName();
        } else {
            return $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        if (!$pluginInfo) {
            return parent::getId();
        } else {
            return $this->___callPlugins('getId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDeleted($isDeleted = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDeleted');
        if (!$pluginInfo) {
            return parent::isDeleted($isDeleted);
        } else {
            return $this->___callPlugins('isDeleted', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanges');
        if (!$pluginInfo) {
            return parent::hasDataChanges();
        } else {
            return $this->___callPlugins('hasDataChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataChanges($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataChanges');
        if (!$pluginInfo) {
            return parent::setDataChanges($value);
        } else {
            return $this->___callPlugins('setDataChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrigData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrigData');
        if (!$pluginInfo) {
            return parent::getOrigData($key);
        } else {
            return $this->___callPlugins('getOrigData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOrigData($key = null, $data = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrigData');
        if (!$pluginInfo) {
            return parent::setOrigData($key, $data);
        } else {
            return $this->___callPlugins('setOrigData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dataHasChangedFor($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dataHasChangedFor');
        if (!$pluginInfo) {
            return parent::dataHasChangedFor($field);
        } else {
            return $this->___callPlugins('dataHasChangedFor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceName');
        if (!$pluginInfo) {
            return parent::getResourceName();
        } else {
            return $this->___callPlugins('getResourceName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceCollection');
        if (!$pluginInfo) {
            return parent::getResourceCollection();
        } else {
            return $this->___callPlugins('getResourceCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        if (!$pluginInfo) {
            return parent::getCollection();
        } else {
            return $this->___callPlugins('getCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function load($modelId, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        if (!$pluginInfo) {
            return parent::load($modelId, $field);
        } else {
            return $this->___callPlugins('load', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeLoad($identifier, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeLoad');
        if (!$pluginInfo) {
            return parent::beforeLoad($identifier, $field);
        } else {
            return $this->___callPlugins('beforeLoad', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        if (!$pluginInfo) {
            return parent::afterLoad();
        } else {
            return $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSaveAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSaveAllowed');
        if (!$pluginInfo) {
            return parent::isSaveAllowed();
        } else {
            return $this->___callPlugins('isSaveAllowed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setHasDataChanges($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHasDataChanges');
        if (!$pluginInfo) {
            return parent::setHasDataChanges($flag);
        } else {
            return $this->___callPlugins('setHasDataChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterCommitCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterCommitCallback');
        if (!$pluginInfo) {
            return parent::afterCommitCallback();
        } else {
            return $this->___callPlugins('afterCommitCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isObjectNew($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isObjectNew');
        if (!$pluginInfo) {
            return parent::isObjectNew($flag);
        } else {
            return $this->___callPlugins('isObjectNew', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        if (!$pluginInfo) {
            return parent::beforeSave();
        } else {
            return $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateBeforeSave');
        if (!$pluginInfo) {
            return parent::validateBeforeSave();
        } else {
            return $this->___callPlugins('validateBeforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTags');
        if (!$pluginInfo) {
            return parent::getCacheTags();
        } else {
            return $this->___callPlugins('getCacheTags', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function cleanModelCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanModelCache');
        if (!$pluginInfo) {
            return parent::cleanModelCache();
        } else {
            return $this->___callPlugins('cleanModelCache', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete();
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        if (!$pluginInfo) {
            return parent::beforeDelete();
        } else {
            return $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        if (!$pluginInfo) {
            return parent::afterDelete();
        } else {
            return $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function afterDeleteCommit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDeleteCommit');
        if (!$pluginInfo) {
            return parent::afterDeleteCommit();
        } else {
            return $this->___callPlugins('afterDeleteCommit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        if (!$pluginInfo) {
            return parent::getResource();
        } else {
            return $this->___callPlugins('getResource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityId');
        if (!$pluginInfo) {
            return parent::getEntityId();
        } else {
            return $this->___callPlugins('getEntityId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityId($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityId');
        if (!$pluginInfo) {
            return parent::setEntityId($entityId);
        } else {
            return $this->___callPlugins('setEntityId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearInstance');
        if (!$pluginInfo) {
            return parent::clearInstance();
        } else {
            return $this->___callPlugins('clearInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoredData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoredData');
        if (!$pluginInfo) {
            return parent::getStoredData();
        } else {
            return $this->___callPlugins('getStoredData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEventPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventPrefix');
        if (!$pluginInfo) {
            return parent::getEventPrefix();
        } else {
            return $this->___callPlugins('getEventPrefix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
