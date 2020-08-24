<?php
namespace Ereactor\CategoryIconModule\Ui\Component\Form\Category;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory as      CategoryCollectionFactory;
use Magento\Framework\App\RequestInterface;

/**
* Options tree for "Categories" field
*/
class Options implements OptionSourceInterface
{

protected $categoryCollectionFactory;

/**
 * @var RequestInterface
 */
protected $request;

/**
 * @var array
 */
protected $categoryTree;

/**
 * @param CategoryCollectionFactory $categoryCollectionFactory
 * @param RequestInterface $request
 */
public function __construct(
    CategoryCollectionFactory $categoryCollectionFactory,
    RequestInterface $request
) {
    $this->categoryCollectionFactory = $categoryCollectionFactory;
    $this->request = $request;
}

/**
 * {@inheritdoc}
 */
public function toOptionArray()
{
    return $this->getCategoryTree();
}

/**
 * Retrieve categories tree
 *
 * @return array
 */
protected function getCategoryTree()
{
    if ($this->categoryTree === null) {
        $collection = $this->categoryCollectionFactory->create();

        $collection->addAttributeToSelect('name');

        foreach ($collection as $category) {
            $categoryId = $category->getEntityId();
            if (!isset($categoryById[$categoryId])) {
                $categoryById[$categoryId] = [
                    'value' => $categoryId
                ];
            }
            $categoryById[$categoryId]['label'] = $category->getName();
        }
        $this->categoryTree = $categoryById;
    }
    return $this->categoryTree;
}
}