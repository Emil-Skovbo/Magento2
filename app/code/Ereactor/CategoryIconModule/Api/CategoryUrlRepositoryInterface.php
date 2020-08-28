<?php

namespace Ereactor\CategoryIconModule\Api; 

    interface CategoryUrlRepositoryInterface
{

    public function getCategoryIconUrl($category, $attributeCode);
}