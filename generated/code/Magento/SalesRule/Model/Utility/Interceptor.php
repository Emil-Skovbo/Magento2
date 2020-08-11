<?php
namespace Magento\SalesRule\Model\Utility;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Utility
 */
class Interceptor extends \Magento\SalesRule\Model\Utility implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SalesRule\Model\ResourceModel\Coupon\UsageFactory $usageFactory, \Magento\SalesRule\Model\CouponFactory $couponFactory, \Magento\SalesRule\Model\Rule\CustomerFactory $customerFactory, \Magento\Framework\DataObjectFactory $objectFactory, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency)
    {
        $this->___init();
        parent::__construct($usageFactory, $couponFactory, $customerFactory, $objectFactory, $priceCurrency);
    }

    /**
     * {@inheritdoc}
     */
    public function canProcessRule($rule, $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canProcessRule');
        if (!$pluginInfo) {
            return parent::canProcessRule($rule, $address);
        } else {
            return $this->___callPlugins('canProcessRule', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function minFix(\Magento\SalesRule\Model\Rule\Action\Discount\Data $discountData, \Magento\Quote\Model\Quote\Item\AbstractItem $item, $qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'minFix');
        if (!$pluginInfo) {
            return parent::minFix($discountData, $item, $qty);
        } else {
            return $this->___callPlugins('minFix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deltaRoundingFix(\Magento\SalesRule\Model\Rule\Action\Discount\Data $discountData, \Magento\Quote\Model\Quote\Item\AbstractItem $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deltaRoundingFix');
        if (!$pluginInfo) {
            return parent::deltaRoundingFix($discountData, $item);
        } else {
            return $this->___callPlugins('deltaRoundingFix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItemPrice($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemPrice');
        if (!$pluginInfo) {
            return parent::getItemPrice($item);
        } else {
            return $this->___callPlugins('getItemPrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItemBasePrice($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemBasePrice');
        if (!$pluginInfo) {
            return parent::getItemBasePrice($item);
        } else {
            return $this->___callPlugins('getItemBasePrice', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItemQty($item, $rule)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemQty');
        if (!$pluginInfo) {
            return parent::getItemQty($item, $rule);
        } else {
            return $this->___callPlugins('getItemQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mergeIds($a1, $a2, $asString = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'mergeIds');
        if (!$pluginInfo) {
            return parent::mergeIds($a1, $a2, $asString);
        } else {
            return $this->___callPlugins('mergeIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetRoundingDeltas()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetRoundingDeltas');
        if (!$pluginInfo) {
            return parent::resetRoundingDeltas();
        } else {
            return $this->___callPlugins('resetRoundingDeltas', func_get_args(), $pluginInfo);
        }
    }
}
