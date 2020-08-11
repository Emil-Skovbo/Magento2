<?php
namespace Magento\User\Model\UserValidationRules;

/**
 * Interceptor class for @see \Magento\User\Model\UserValidationRules
 */
class Interceptor extends \Magento\User\Model\UserValidationRules implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function addUserInfoRules(\Magento\Framework\Validator\DataObject $validator)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUserInfoRules');
        if (!$pluginInfo) {
            return parent::addUserInfoRules($validator);
        } else {
            return $this->___callPlugins('addUserInfoRules', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addPasswordRules(\Magento\Framework\Validator\DataObject $validator)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPasswordRules');
        if (!$pluginInfo) {
            return parent::addPasswordRules($validator);
        } else {
            return $this->___callPlugins('addPasswordRules', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addPasswordConfirmationRule(\Magento\Framework\Validator\DataObject $validator, $passwordConfirmation)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPasswordConfirmationRule');
        if (!$pluginInfo) {
            return parent::addPasswordConfirmationRule($validator, $passwordConfirmation);
        } else {
            return $this->___callPlugins('addPasswordConfirmationRule', func_get_args(), $pluginInfo);
        }
    }
}
