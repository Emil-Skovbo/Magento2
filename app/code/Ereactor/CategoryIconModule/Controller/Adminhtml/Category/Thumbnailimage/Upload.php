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
    protected $categoryRepository;
    protected $layerResolver;
    protected $_storeManager;
    private $registry;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Catalog\Model\ImageUploader $imageUploader,
        //\Magento\Catalog\Model\Layer\Resolver $layerResolver,
        //\Magento\Store\Model\StoreManagerInterface $storeManager,
        CategoryRepositoryInterface $categoryRepository,
        Registry $registry
    ) {
        $this->imageUploader = $imageUploader;
        $this->categoryRepository = $categoryRepository;
        parent::__construct($context);
       // $this->layerResolver = $layerResolver;
       //$this->_storeManager = $storeManager;
       $this->registry = $registry;
    }
    public function execute() {
        error_log("before test");
        try {
            error_log("test");
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
        //   $id = $this->getUrl('*/*/*', ['_current' => true, '_use_rewrite' => false]);
        //    $path_parts= explode('/', $id);
        //    $user = $path_parts[9];
        //    error_log($user . " id");
            error_log("before id");
            $id = $this->getCategory();
            error_log("current id = ", $id);
           $category = $this->categoryRepository->get(38);
           // error_log($urlPath . " saved");
            $category->setCustomAttribute('thumbnail', $urlPath);
            $this->categoryRepository->save($category);
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

 /*   public function getCurrentCategory()
    {
        error_log("test1");
        return $this->layerResolver->get()->getCurrentCategory();
    }
*/
    public  function getCategory()
    {
        $category = $this->registry->registry('current_category');
            error_log("category = ",$category);
        return $category->getId();
    }
}