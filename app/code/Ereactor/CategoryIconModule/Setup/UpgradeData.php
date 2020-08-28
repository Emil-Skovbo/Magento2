<?php
namespace Ereactor\CategoryIconModule\Setup;

use Magento\Framework\Module\Setup\Migration;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetupFactory;

class UpgradeData implements UpgradeDataInterface
{
    public $categorySetupFactory;


    public function __construct(EavSetupFactory $categorySetupFactory)
    {
        $this->categorySetupFactory = $categorySetupFactory;
        
    }
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $this->categorySetupFactory =$this->categorySetupFactory->create(['setup' => $setup]);
        $this->categorySetupFactory->addAttribute(
            \Magento\Catalog\Model\Category::ENTITY, 'dev98_icon',        
             [
                'type' => 'varchar',
                'label' => 'dev98 Icon',
                'input' => 'image',
                'sort_order' => 333,
                'source' => '',
                'global' => 2,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => null,
            ]
        );  
        $setup->endSetup();
    }
}