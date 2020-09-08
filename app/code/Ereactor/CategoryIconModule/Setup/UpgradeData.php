<?php
namespace Ereactor\CategoryIconModule\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetupFactory;


class UpgradeData implements UpgradeDataInterface
{
    public $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;

    }
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $this->eavSetupFactory =$this->eavSetupFactory->create(['setup' => $setup]);
        $this->eavSetupFactory->addAttribute(
            \Magento\Catalog\Model\Category::ENTITY,
            'thumbnail',
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
