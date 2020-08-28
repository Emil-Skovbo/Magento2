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
        error_log("test1");
        if (!$imageAttribute instanceof AttributeInterface) {
            error_log("test2");
            return $url;
            
        }
        error_log("test3");
        $imageName = $imageAttribute->getValue();

        if (!$imageName) {
            return $url;
            error_log("test4");
        }

        /** @var StoreInterface $store */
        error_log("test5");
        $store = $this->storeManager->getStore();
        error_log("test6");
        $baseUrl = $store->getBaseUrl(UrlInterface::URL_TYPE_MEDIA);
        $url = $baseUrl . 'catalog/category/dev98/' . $attributeCode . '/' . $imageName;
        error_log(" construct works 1");
        return $url;
    }

}