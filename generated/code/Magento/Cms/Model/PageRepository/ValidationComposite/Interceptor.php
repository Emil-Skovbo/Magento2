<?php
namespace Magento\Cms\Model\PageRepository\ValidationComposite;

/**
 * Interceptor class for @see \Magento\Cms\Model\PageRepository\ValidationComposite
 */
class Interceptor extends \Magento\Cms\Model\PageRepository\ValidationComposite implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Api\PageRepositoryInterface $repository, array $validators = [])
    {
        $this->___init();
        parent::__construct($repository, $validators);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Cms\Api\Data\PageInterface $page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($page);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getById($pageId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getById');
        if (!$pluginInfo) {
            return parent::getById($pageId);
        } else {
            return $this->___callPlugins('getById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        if (!$pluginInfo) {
            return parent::getList($searchCriteria);
        } else {
            return $this->___callPlugins('getList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Cms\Api\Data\PageInterface $page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($page);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($pageId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        if (!$pluginInfo) {
            return parent::deleteById($pageId);
        } else {
            return $this->___callPlugins('deleteById', func_get_args(), $pluginInfo);
        }
    }
}
