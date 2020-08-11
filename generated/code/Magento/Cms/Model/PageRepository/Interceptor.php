<?php
namespace Magento\Cms\Model\PageRepository;

/**
 * Interceptor class for @see \Magento\Cms\Model\PageRepository
 */
class Interceptor extends \Magento\Cms\Model\PageRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Model\ResourceModel\Page $resource, \Magento\Cms\Model\PageFactory $pageFactory, \Magento\Cms\Api\Data\PageInterfaceFactory $dataPageFactory, \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $pageCollectionFactory, \Magento\Cms\Api\Data\PageSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null, ?\Magento\Cms\Model\Page\IdentityMap $identityMap = null, ?\Magento\Framework\EntityManager\HydratorInterface $hydrator = null)
    {
        $this->___init();
        parent::__construct($resource, $pageFactory, $dataPageFactory, $pageCollectionFactory, $searchResultsFactory, $dataObjectHelper, $dataObjectProcessor, $storeManager, $collectionProcessor, $identityMap, $hydrator);
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
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $criteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        if (!$pluginInfo) {
            return parent::getList($criteria);
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
