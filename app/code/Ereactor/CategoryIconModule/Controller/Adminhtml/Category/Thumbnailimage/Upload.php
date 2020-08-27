<?php
namespace Ereactor\CategoryIconModule\Controller\Adminhtml\Category\Thumbnailimage;
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
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Backend\App\Action\Context $context,
        \Magento\Catalog\Model\ImageUploader $imageUploader,
        CategoryRepositoryInterface $catRepo
    ) {
        $this->imageUploader = $imageUploader;
        $this->catRepo = $catRepo;
        $this->_categoryFactory = $categoryFactory;
        parent::__construct($context);
    }
    public function execute() {
        try {
            $result = $this->imageUploader->saveFileToTmpDir('thumbnail');
            $urlPath = $result["url"];
            $categoryTitle = 'Women';
            $collection = $this->_categoryFactory->create()->getCollection()
                ->addAttributeToFilter('name',$categoryTitle)->setPageSize(1);
            if ($collection->getSize()) {
                $categoryId = $collection->getFirstItem()->getId();
            }
            error_log($categoryId);
            $category = $this->catRepo->get($categoryId);
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
