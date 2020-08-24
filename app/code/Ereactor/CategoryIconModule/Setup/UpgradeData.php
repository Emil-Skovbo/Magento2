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
            \Magento\Catalog\Model\Category::ENTITY, 'thumbnail', [
                'type' => 'varchar',
                'label' => 'Featured Image',
                'input' => 'image',
                'backend' => 'Magento\Catalog\Model\Category\Attribute\Backend\Image',
                'required' => false,
                'sort_order' => 5,
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                'group' => 'General Information',
            ]
        );  
        $setup->endSetup();
    }

    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Category::ENTITY,
            'category_icon_select',
            [
                'type' => 'int',
                'label' => 'Select Category Icon',
                'input' => 'select',
                'sort_order' => 333,
                'source' => 'Vendor\Module\Model\Category\Attribute\Source\CategoryIconSelect',
                'global' => 1,
                'visible' => true,
                'required' => true,
                'user_defined' => false,
                'default' => null,
                'group' => 'General Information',
                'backend' => ''
            ]
        );
    }
}