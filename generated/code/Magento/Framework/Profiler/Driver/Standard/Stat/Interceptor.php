<?php
namespace Magento\Framework\Profiler\Driver\Standard\Stat;

/**
 * Interceptor class for @see \Magento\Framework\Profiler\Driver\Standard\Stat
 */
class Interceptor extends \Magento\Framework\Profiler\Driver\Standard\Stat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function start($timerId, $time, $realMemory, $emallocMemory)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'start');
        if (!$pluginInfo) {
            return parent::start($timerId, $time, $realMemory, $emallocMemory);
        } else {
            return $this->___callPlugins('start', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stop($timerId, $time, $realMemory, $emallocMemory)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'stop');
        if (!$pluginInfo) {
            return parent::stop($timerId, $time, $realMemory, $emallocMemory);
        } else {
            return $this->___callPlugins('stop', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get($timerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($timerId);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetch($timerId, $key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetch');
        if (!$pluginInfo) {
            return parent::fetch($timerId, $key);
        } else {
            return $this->___callPlugins('fetch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clear($timerId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clear');
        if (!$pluginInfo) {
            return parent::clear($timerId);
        } else {
            return $this->___callPlugins('clear', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFilteredTimerIds(?array $thresholds = null, $filterPattern = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilteredTimerIds');
        if (!$pluginInfo) {
            return parent::getFilteredTimerIds($thresholds, $filterPattern);
        } else {
            return $this->___callPlugins('getFilteredTimerIds', func_get_args(), $pluginInfo);
        }
    }
}
