<?php
namespace Magento\PageCache\Model\Config;

/**
 * Interceptor class for @see \Magento\PageCache\Model\Config
 */
class Interceptor extends \Magento\PageCache\Model\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem\Directory\ReadFactory $readFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\App\Cache\StateInterface $cacheState, \Magento\Framework\Module\Dir\Reader $reader, \Magento\PageCache\Model\Varnish\VclGeneratorFactory $vclGeneratorFactory, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($readFactory, $scopeConfig, $cacheState, $reader, $vclGeneratorFactory, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getType');
        if (!$pluginInfo) {
            return parent::getType();
        } else {
            return $this->___callPlugins('getType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTtl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTtl');
        if (!$pluginInfo) {
            return parent::getTtl();
        } else {
            return $this->___callPlugins('getTtl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVclFile($vclTemplatePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVclFile');
        if (!$pluginInfo) {
            return parent::getVclFile($vclTemplatePath);
        } else {
            return $this->___callPlugins('getVclFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabled');
        if (!$pluginInfo) {
            return parent::isEnabled();
        } else {
            return $this->___callPlugins('isEnabled', func_get_args(), $pluginInfo);
        }
    }
}
