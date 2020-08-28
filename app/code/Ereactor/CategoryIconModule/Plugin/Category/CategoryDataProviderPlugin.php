<?php
/**
 * @copyright Copyright (c) 1999-2016 netz98 GmbH (http://www.netz98.de)
 *
 * @see PROJECT_LICENSE.txt
 */

namespace Ereactor\CategoryIconModule\Plugin\Category;

use Ereactor\CategoryIconModule\Api\CategoryUrlRepositoryInterface;
use Magento\Catalog\Model\Category;
use Magento\Catalog\Model\Category\DataProvider as CategoryDataProvider;

/**
 * CategoryDataProviderPlugin
 */
class CategoryDataProviderPlugin
{
    /**
     * @var CategoryUrlRepositoryInterface
     */
    private $categoryUrlRepository;

    /**
     * CategoryDataProviderPlugin constructor.
     *
     * @param CategoryUrlRepositoryInterface $categoryUrlRepository
     *
     * @internal param StoreManagerInterface $storeManager
     */
    public function __construct(CategoryUrlRepositoryInterface $categoryUrlRepository)
    {
        $this->categoryUrlRepository = $categoryUrlRepository;
        error_log(" Category3");
    }

    /**
 * Get data
 *
 * @return array
 */
public function getData()
{
    if (isset($this->loadedData)) {
        return $this->loadedData;
    }
    $category = $this->getCurrentCategory();
    if ($category) {
        $categoryData = $category->getData();
        $categoryData = $this->addUseDefaultSettings($category, $categoryData);
        $categoryData = $this->addUseConfigSettings($categoryData);
        $categoryData = $this->filterFields($categoryData);
        if (isset($categoryData['image'])) {
            unset($categoryData['image']);
            $categoryData['image'][0]['name'] = $category->getData('image');
            $categoryData['image'][0]['url'] = $category->getImageUrl();
        }
        $this->loadedData[$category->getId()] = $categoryData;
    }
    return $this->loadedData;
}

    /**
     * AfterGetData
     *
     * we need to modify the data Array returned and generate the data array.
     * This includes the correct image url.
     * Without the information the Admin will not show this field due to an error
     *
     * @param CategoryDataProvider $subject
     * @param array $data
     *
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetData(CategoryDataProvider $subject, array $data)
    {
        /** @var Category $category */
        $category = $subject->getCurrentCategory();
        if (!$category) {
            return $data;
        }

        $attributeCodes = [
            'dev98_icon',
        ];

        foreach ($attributeCodes as $attributeCode) {
            $image = $category->getData($attributeCode);
            if (!$image) {
                continue;
            }

            $imageName = $image;
            if (!is_string($image)) {
                if (is_array($image)) {
                    $imageName = $image[0]['name'];
                }
            }
            $categoryImageUrl = $this->categoryUrlRepository->getCategoryIconUrl($category, $attributeCode);
            $seoImageData = [
                0 => [
                    'name' => $imageName,
                    'url' => $categoryImageUrl,
                ],
            ];
            $data[$category->getId()][$attributeCode] = $seoImageData;
        }
        error_log(" construct works 2");
        return $data;
    }
}