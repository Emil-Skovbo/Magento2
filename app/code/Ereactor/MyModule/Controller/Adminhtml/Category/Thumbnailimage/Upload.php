<?php
namespace Ereactor\MyModule\Controller\Adminhtml\Category\Thumbnailimage;

use Magento\Framework\Controller\ResultFactory;
use Magento\Catalog\Api\CategoryRepositoryInterface;


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
            $result = $this->imageUploader->saveFileToTmpDir('thumbnail');
            $urlPath = $result["url_path"];
            error_log($urlPath . " saved");
            $category = $this->catRepo->get(38);
            error_log($category->getName());
            $category->setCustomAttribute('thumbnail', $urlPath);
            $this->catRepo->save($category);
            error_log("cat saved");
            
            $result['cookie'] = [
                'name' => $this->_getSession()->getName(),
                'value' => $this->_getSession()->getSessionId(),
                'lifetime' => $this->_getSession()->getCookieLifetime(),
                'path' => $this->_getSession()->getCookiePath(),
                'domain' => $this->_getSession()->getCookieDomain(),
            ];

        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);
    }
}