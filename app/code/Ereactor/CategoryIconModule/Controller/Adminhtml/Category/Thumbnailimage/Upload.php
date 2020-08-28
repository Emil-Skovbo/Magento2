<?php
namespace Ereactor\CategoryIconModule\Controller\Adminhtml\Category\Thumbnailimage;
use Magento\Framework\Controller\ResultFactory;
use Magento\Catalog\Api\CategoryRepositoryInterface;

/**
 * Class Upload
 */
class Upload extends \Magento\Backend\App\Action
{   
    protected $basePath;
    protected $baseTmpPath;
    protected $imageUploader;
    protected $catRepo;
    
    public function __construct(
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Backend\App\Action\Context $context,
        \Magento\Catalog\Model\ImageUploader $imageUploader,
        CategoryRepositoryInterface $catRepo
    ) {
        error_log(" construct");
        $this->imageUploader = $imageUploader;
        $this->catRepo = $catRepo;
        $this->_categoryFactory = $categoryFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        try {
            error_log(" execute test");
            $attributeCode = $this->getRequest()->getParam('attribute_code');
            if (!$attributeCode) {
                throw new \Exception('attribute_code missing');
            }

            $basePath = 'catalog/category/dev98/' . $attributeCode;
            $baseTmpPath = 'catalog/category/dev98/tmp/' . $attributeCode;
            error_log($basePath . " base");
            error_log($baseTmpPath . " tmp");
            $this->imageUploader->setBasePath($basePath);
            $this->imageUploader->setBaseTmpPath($baseTmpPath);

            $result = $this->imageUploader->saveFileToTmpDir($attributeCode);

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
