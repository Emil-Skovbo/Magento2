<?php

namespace Ereactor\CategoryIconModule\Api; 

    interface CategoryUrlRepositoryInterface
{
    public function getCategoryIconUrl(\Magento\Catalog\Api\Data\CategoryInterface $category, $attributeCode);
}