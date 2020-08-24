<?php
/**
 * Copyright © 2015 Codeclinics. All rights reserved.
 */

namespace Test\Category\Controller\Adminhtml\Category;

class Index extends \Test\Category\Controller\Adminhtml\Category
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Test_Category::category');
        $resultPage->getConfig()->getTitle()->prepend(__('Category Items'));
        $resultPage->addBreadcrumb(__('Category'), __('Category'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
