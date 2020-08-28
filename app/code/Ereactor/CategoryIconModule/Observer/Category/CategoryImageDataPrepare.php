<?php
namespace Ereactor\CategoryIconModule\Observer\Category;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class ImageDataPrepare
 */
class CategoryImageDataPrepare implements ObserverInterface
{
    /**
     * List of available cms page image attributes
     *
     * @var []
     */
    protected $imageAttributes = [
        'dev98_icon',
    ];

    /**
     * Prepare image data before save
     *
     * @param Observer $observer
     *
     * @return $this
     */
    public function execute(Observer $observer)
    {
        /** @var \Magento\Catalog\Model\Category $category */
        error_log(" CategoryImageDataPrepare");
        $category = $observer->getCategory();
        $data = $observer->getRequest()->getParams();
        foreach ($this->imageAttributes as $attributeName) {
            if (isset($data[$attributeName]) && is_array($data[$attributeName])) {
                if (!empty($data[$attributeName]['delete'])) {
                    $data[$attributeName] = null;
                } else {
                    if (isset($data[$attributeName][0]['tmp_name'])) {
                        $data['is_uploaded'][$attributeName] = true;
                    }
                    if (isset($data[$attributeName][0]['name']) && isset($data[$attributeName][0]['tmp_name'])) {
                        $data[$attributeName] = $data[$attributeName][0]['name'];
                    } else {
                        unset($data[$attributeName]);
                    }
                }
            }
            if (isset($data[$attributeName])) {
                $category->setData($attributeName, $data[$attributeName]);
            }
        }
        if (isset($data['is_uploaded'])) {
            $category->setData('is_uploaded', $data['is_uploaded']);
        }

        return $this;
    }
}