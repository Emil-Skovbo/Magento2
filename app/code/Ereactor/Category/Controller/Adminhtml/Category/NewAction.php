<?php
/**
 * Copyright © 2015 Codeclinics. All rights reserved.
 */

namespace Test\Category\Controller\Adminhtml\Category;

class NewAction extends \Test\Category\Controller\Adminhtml\Category
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
