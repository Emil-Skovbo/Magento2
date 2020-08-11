<?php
namespace Magento\Webapi\Controller\Rest\Router\Route;

/**
 * Interceptor class for @see \Magento\Webapi\Controller\Rest\Router\Route
 */
class Interceptor extends \Magento\Webapi\Controller\Rest\Router\Route implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($route = '')
    {
        $this->___init();
        parent::__construct($route);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        if (!$pluginInfo) {
            return parent::match($request);
        } else {
            return $this->___callPlugins('match', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setServiceClass($serviceClass)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setServiceClass');
        if (!$pluginInfo) {
            return parent::setServiceClass($serviceClass);
        } else {
            return $this->___callPlugins('setServiceClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServiceClass');
        if (!$pluginInfo) {
            return parent::getServiceClass();
        } else {
            return $this->___callPlugins('getServiceClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setServiceMethod($serviceMethod)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setServiceMethod');
        if (!$pluginInfo) {
            return parent::setServiceMethod($serviceMethod);
        } else {
            return $this->___callPlugins('setServiceMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServiceMethod');
        if (!$pluginInfo) {
            return parent::getServiceMethod();
        } else {
            return $this->___callPlugins('getServiceMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSecure($secure)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSecure');
        if (!$pluginInfo) {
            return parent::setSecure($secure);
        } else {
            return $this->___callPlugins('setSecure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSecure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSecure');
        if (!$pluginInfo) {
            return parent::isSecure();
        } else {
            return $this->___callPlugins('isSecure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAclResources($aclResources)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAclResources');
        if (!$pluginInfo) {
            return parent::setAclResources($aclResources);
        } else {
            return $this->___callPlugins('setAclResources', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAclResources()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAclResources');
        if (!$pluginInfo) {
            return parent::getAclResources();
        } else {
            return $this->___callPlugins('getAclResources', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setParameters($parameters)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParameters');
        if (!$pluginInfo) {
            return parent::setParameters($parameters);
        } else {
            return $this->___callPlugins('setParameters', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParameters()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParameters');
        if (!$pluginInfo) {
            return parent::getParameters();
        } else {
            return $this->___callPlugins('getParameters', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRoutePath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRoutePath');
        if (!$pluginInfo) {
            return parent::getRoutePath();
        } else {
            return $this->___callPlugins('getRoutePath', func_get_args(), $pluginInfo);
        }
    }
}
