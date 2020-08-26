<?php
namespace Ereactor\CategoryIconModule\Controller\Adminhtml\Category\Thumbnailimage;

use Magento\Framework\Controller\ResultFactory;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Framework\Registry;

/**
 * Class Upload
 */
class Upload extends \Magento\Backend\App\Action
{
    protected $baseTmpPath;
    protected $imageUploader;
    protected $catRepo;
    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Catalog\Model\ImageUploader $imageUploader,
        \Magento\Framework\Registry $registry,
        CategoryRepositoryInterface $catRepo
    ) {
        $this->imageUploader = $imageUploader;
        $this->catRepo = $catRepo;
        parent::__construct($context);
    }
    public function execute() {
        try {
            $result = $this->imageUploader->saveFileToTmpDir('thumbnail');
            $urlPath = $result["url"];
           // error_log("test1");
           // $categoryid = $this->registry->registry('current_category');
            //error_log(print_r($categoryid, true)
           // error_log("test2");
            //$id = $tc->getCurrentCategory();
           // error_log("test3");
            //error_log(print_r($id, true));
           // error_log("test4");
            //$id = $this->getUrl('*/*/*', ['_current' => true, '_use_rewrite' => false]);
            //$path_parts= explode('/', $id);
            //$user = $path_parts[9];
            error_log($this->_registry->registry('current_category'));
            $category = $this->catRepo->get(38);
           // error_log($urlPath . " saved");
            $category->setCustomAttribute('thumbnail', $urlPath);
            $this->catRepo->save($category);
            $result['cookie'] = [
                'name' => $this->_getSession()->getName(),
                'value' => $this->_getSession()->getSessionId(),
                'lifetime' => $this->_getSession()->getCookieLifetime(),
                'path' => $this->_getSession()->getCookiePath(),
                'domain' => $this->_getSession()->getCookieDomain(),
            ];
        } catch (\Exception $e) {
            $result = ['error' => $e->getMessage(), 'errorcode' => $e->getCode()];
        }
        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);
    }
}