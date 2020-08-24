<?php
/**
 * Copyright © 2015 Codeclinics. All rights reserved.
 */

namespace Test\Category\Model\Resource\Category;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Test\Category\Model\Category', 'Test\Category\Model\Resource\Category');
    }
}
