<?php
namespace Ereactor\CategoryIconModule\Controller\Adminhtml\Category\Thumbnailimage;
class testcat extends \Magento\Framework\View\Element\Template
{
        protected $_registry;
        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Framework\Registry $registry,
        array $data = []
    )
    {        
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    
    public function getCurrentCategory()
    {        
        error_log(print_r($this->_registry->registry('current_category'),true));
        return $this->_registry->registry('current_category');
    }
    
    public function getCurrentProduct()
    {        
        error_log(print_r($this->_registry->registry('current_product'),true));
        return $this->_registry->registry('current_product');
    }    
    
}
?>