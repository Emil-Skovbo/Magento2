<?php
namespace Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype;

/**
 * Interceptor class for @see \Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype
 */
class Interceptor extends \Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $optionsArray = [])
    {
        $this->___init();
        parent::__construct($optionsArray);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        if (!$pluginInfo) {
            return parent::toOptionArray();
        } else {
            return $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVolatileInputTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVolatileInputTypes');
        if (!$pluginInfo) {
            return parent::getVolatileInputTypes();
        } else {
            return $this->___callPlugins('getVolatileInputTypes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getInputTypeHints()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInputTypeHints');
        if (!$pluginInfo) {
            return parent::getInputTypeHints();
        } else {
            return $this->___callPlugins('getInputTypeHints', func_get_args(), $pluginInfo);
        }
    }
}
