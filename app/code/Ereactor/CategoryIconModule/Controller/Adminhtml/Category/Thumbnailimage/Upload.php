<?php
namespace Ereactor\CategoryIconModule\Controller\Adminhtml\Category\Thumbnailimage;

use Magento\Framework\Controller\ResultFactory;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Framework\Registry;
include ("testcat.php");

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
           // $categoryid = $this->registry->registry('current_category');
            //error_log(print_r($categoryid, true));
            //$testcat = new testcat();
            //$id = $testcat->getCurrentCategory();
            $category = $this->catRepo->get(38);
            error_log($urlPath . " saved");
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