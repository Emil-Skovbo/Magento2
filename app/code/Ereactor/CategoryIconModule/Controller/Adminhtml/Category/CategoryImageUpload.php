<?php
namespace Ereactor\CategoryIconModule\Controller\Adminhtml\Category;

use Magento\Framework\Controller\ResultFactory;

class CategoryImageUpload extends \Magento\Backend\App\Action
{
    /**
     * Image uploader
     *
     * @var \Magento\Catalog\Model\ImageUploader
     */
    protected $imageUploader;
    protected $baseTmpPath;
    protected $basePath;

    /**
     * Upload constructor.
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Catalog\Model\ImageUploader $imageUploader
     */
    public function __construct(

        \Magento\Backend\App\Action\Context $context,
        \Magento\Catalog\Model\ImageUploader $imageUploader,
        $baseTmpPath,
        $basePath
    )
    {
        error_log("construct on categoryImageUpload");
        parent::__construct($context);
        $this->imageUploader = $imageUploader;
        $this->baseTmpPath = $baseTmpPath;
        $this->basePath = $basePath;
    }

    /**
     * Check admin permissions for this controller
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magento_Catalog::categories');
    }

    /**
     * Upload file controller action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        try {
            error_log("upload 0");
            $attributeCode = $this->getRequest()->getParam('attribute_code');
            if (!$attributeCode) {
                throw new \Exception('attribute_code missing');
                error_log("upload 1");
            }

            $basePath = 'catalog/category/' . $attributeCode;
            $baseTmpPath = 'catalog/category/tmp/' . $attributeCode;
            error_log("upload 2");
            $this->imageUploader->setBasePath($basePath);
            $this->imageUploader->setBaseTmpPath($baseTmpPath);
            error_log("upload 3");
            //error_log("attri =" . $attributeCode);
            $result = $this->imageUploader->saveFileToTmpDir($attributeCode);
            error_log("upload 4");
            $result['cookie'] = [
                'name' => $this->_getSession()->getName(),
                'value' => $this->_getSession()->getSessionId(),
                'lifetime' => $this->_getSession()->getCookieLifetime(),
                'path' => $this->_getSession()->getCookiePath(),
                'domain' => $this->_getSession()->getCookieDomain(),
            ];
        } catch (\Exception $e) {
            error_log("upload error catch");
            $result = ['error' => $e->getMessage(), 'errorcode' => $e->getCode()];
        }
        error_log("upload 5");
        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);

    }
}

