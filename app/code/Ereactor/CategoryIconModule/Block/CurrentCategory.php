<?php
namespace Ereactor\CategoryIconModule\Block;

use Magento\Framework\Registry;
 
class CurrentCategory extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Registry $registry,
        array $data = []
    ) {
        $this->registry = $registry;
        parent::__construct($context, $data);
    }
 
    /* $categoryId as category id */
    public function getCurrentCategory()
    {
        $category = $this->getData('current_category');
        if ($category === null) {
            $category = $this->registry->registry('current_category');
            if ($category) {
                $this->setData('current_category', $category);
            } else {
                $category = $this->categoryRepository->get($this->getCurrentStore()->getRootCategoryId());
                $this->setData('current_category', $category);
            }
        }
    
        return $category;
    }
}