<?php
namespace Ereactor\CategoryIconModule\Block;
 
class CurrentCategory extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->registry = $registry;
        parent::__construct($context, $data);
    }
 
    /* $categoryId as category id */
    public function getCategory(){
        try {
            error_log(print_r($this->registry->registry('current_category'), true));
            return $this->registry->registry('current_category');
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            return ['response' => 'Category Not Found'];
        }
    }
}