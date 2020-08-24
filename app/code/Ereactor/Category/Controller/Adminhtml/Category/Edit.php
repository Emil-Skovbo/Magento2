<?php
/**
 * Copyright © 2015 Codeclinics. All rights reserved.
 */

namespace Test\Category\Controller\Adminhtml\Category;

class Edit extends \Test\Category\Controller\Adminhtml\Category
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create('Test\Category\Model\Category');

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This item no longer exists.'));
                $this->_redirect('test_category/*');
                return;
            }
        }
        // set entered data if was error when we do save
        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $this->_coreRegistry->register('current_test_category_items', $model);
        $this->_initAction();
        $this->_view->getLayout()->getBlock('category_category_edit');
        $this->_view->renderLayout();
    }
}
