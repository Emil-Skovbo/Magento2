<?php
namespace Mageplaza\HelloWorld\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetupFactory;

class InstallData implements InstallDataInterface
{

	private $eavSetupFactory;

	public function __construct(EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}

	public function install(
		ModuleDataSetupInterface $setup,
		ModuleContextInterface $context
	)
	{
		if (version_compare($context->getVersion(), '1.0.6', '<')) {
			$eavSetup = $this->eavSetupFactory->create();
	
			$eavSetup->addAttribute(
				\Magento\Catalog\Model\Category::ENTITY,
				'color_image',
				[
					'type' => 'varchar',
					'label' => 'color_image',
					'input' => 'media_image',
					'required' => false,
					'sort_order' => 30,
					'frontend' => \Magento\Catalog\Model\Product\Attribute\Frontend\Image::class,
					'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
					'used_in_product_listing' => true,
					'user_defined' => true,
					'visible' => true,
					'visible_on_front' => true
				]
			);
			
		}
	
	}

}