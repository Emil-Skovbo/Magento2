<?php
/**
 * Copyright © 2015 {{CompanyName}}. All rights reserved.
 */

namespace Test\Category\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action 
{
   /** @var  \Magento\Framework\View\Result\Page */
    
	 protected $resultPageFactory;
    /**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)     {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

	public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();        
        $resultPage->getConfig()->getTitle()->prepend(__('Test Category'));        
        return $resultPage;
    }
}
