<?php
namespace Ereactor\CategoryIconModule\Model;

use Ereactor\CategoryIconModule\Api\CategoryUrlRepositoryInterface;
use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Framework\Api\AttributeInterface;
use Magento\Framework\UrlInterface;
use Magento\Store\Api\Data\StoreInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * CategoryUrlRepository
 */
class CategoryUrlRepository implements CategoryUrlRepositoryInterface
{
    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * CategoryUrlRepository constructor.
     *
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(StoreManagerInterface $storeManager)
    {
        $this->storeManager = $storeManager;
        error_log(" construct1");
    }

    /**
     * @param CategoryInterface $category
     * @param $attributeCode
     *
     * @return string
     */
    public function getCategoryIconUrl(CategoryInterface $category, $attributeCode)
    {
        $url = '';

        $imageAttribute = $category->getCustomAttribute($attributeCode);

        if (!$imageAttribute instanceof AttributeInterface) {
            return $url;
        }

        $imageName = $imageAttribute->getValue();

        if (!$imageName) {
            return $url;
        }

        /** @var StoreInterface $store */
        $store = $this->storeManager->getStore();
        $baseUrl = $store->getBaseUrl(UrlInterface::URL_TYPE_MEDIA);
        $url = $baseUrl . 'catalog/category/dev98/' . $attributeCode . '/' . $imageName;

        return $url;
    }

}