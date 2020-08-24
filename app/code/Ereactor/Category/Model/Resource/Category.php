<?php
/**
 * Copyright © 2015 Codeclinics. All rights reserved.
 */

namespace Test\Category\Model\Resource;

class Category extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('test_category', 'id');
    }
}
