<?php
/**
 * Copyright © 2015 Codeclinics. All rights reserved.
 */

namespace Test\Category\Model;

class Category extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Test\Category\Model\Resource\Category');
    }
}
