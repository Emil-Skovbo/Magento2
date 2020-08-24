<?php
/**
 * Copyright © 2015 Codeclinics. All rights reserved.
 */


namespace Test\Category\Block\Adminhtml\Category\Edit\Tab;


use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;



class Main extends Generic implements TabInterface
{

    
    public function getTabLabel()
    {
        return __('Item Information');
    }

    
    public function getTabTitle()
    {
        return __('Item Information');
    }

    
    public function canShowTab()
    {
        return true;
    }

    
    public function isHidden()
    {
        return false;
    }

    /**
     * Prepare form before rendering HTML
     *
     * @return $this    
     */
    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('current_test_category_items');
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('item_');
        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Item Information')]);
        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        }

	$fieldset->addType(
	    'categories',
	    '\Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Category'
	   );


        $fieldset->addField(
            'title',
            'text',
            ['name' => 'title', 'label' => __('Item Name'), 'title' => __('Item Name'), 'required' => true]
        );
		
		$fieldset->addField(
            'file',
            'file',
            ['name' => 'file', 'label' => __('File'), 'title' => __('File'), 'required' => false]
        );
		
		$fieldset->addField(
            'description',
            'text',
            ['name' => 'description', 'label' => __('Description'), 'title' => __('Description'), 'required' => true]
        );
       		
	$fieldset->addField(
        'category',
        'categories',
        [
            'name' => 'category',
            'label' => __('Category'),
            'title' => __('Category')
        ]
    );
       		
	
        $form->setValues($model->getData());
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
