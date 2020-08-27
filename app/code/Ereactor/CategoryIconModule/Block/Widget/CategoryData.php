<?php
namespace Ereactor\CategoryIconModule\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\CategoryRepository;
use Magento\Catalog\Helper\Category;


class CategoryData extends Template implements BlockInterface
{
    protected $_template = "widget/categoryIcons.phtml";
    protected $catRepo;
    protected $_categoryFactory;
    private $layerResolver;
    protected $_storeManager;
    protected $CategoryRepository;
    public function __construct(Template\Context $context, array $data = [], 
    CategoryRepositoryInterface $catRepo, 
    CategoryRepository $categoryRepository,
    \Magento\Catalog\Model\CategoryFactory $categoryFactory,
    \Magento\Catalog\Model\Layer\Resolver $layerResolver,
    \Magento\Store\Model\StoreManagerInterface $storeManager,
    \Magento\Catalog\Helper\Category $catalogCategory
 )
{
    $this->validator = $context->getValidator();
    $this->resolver = $context->getResolver();
    $this->_filesystem = $context->getFilesystem();
    $this->templateEnginePool = $context->getEnginePool();
    $this->_storeManager = $context->getStoreManager();
    $this->_appState = $context->getAppState();
    $this->templateContext = $this;
    $this->pageConfig = $context->getPageConfig();
    $this->catRepo = $catRepo;
    $this->_categoryFactory = $categoryFactory;
    parent::__construct($context, $data);
    $this->layerResolver = $layerResolver;
    $this->_storeManager = $storeManager;
    $this->categoryRepository = $categoryRepository;
    $this->_categoryHelper = $catalogCategory;
}

// makes an array based on the input from widget.xml
    public function getCatIcon(){
    $catid = $this->getData("id");
    $catidtest = $this->getData("category_id");
    $catid = explode(",",$catid);
    $catinfo = [];
    foreach ($catid as $id) {
        $categoryid = $this->catRepo->get($id);
        $categoryname = $this->_categoryFactory->create()->load($id);
        //$categorynametest = $this->_categoryFactory->create()->load($catidtest);

        $catinfo[] = array(
            'name' => $categoryname->getName(),
            //gets the url to the uploaded img
            'img' => $categoryname->getImageUrl(),
            //$categoryid->getCustomAttribute('thumbnail')->getValue(),
            //gets the url to the category we are linking to
            'url' => $categoryname->getUrl(),
            'testid' => $this->getCurrentCategory()->getId(),
            'testarray' => $this->storeCategoriesArray(),
            'testurl2' => $this->getData("category_id")
        );
    }
    error_log("works");
    return $catinfo;
     }

         /* $categoryId as category id */
    public function getCurrentCategory()
    {
        error_log("test1");
        return $this->layerResolver->get()->getCurrentCategory();
    }

    public function getThumbnailUrl($imageName){
        $url = $this->_storeManager->getStore()->getBaseUrl(
                \Magento\Framework\UrlInterface::URL_TYPE_MEDIA
            ) . 'catalog/tmp/category/' . $imageName;
        return $url;
    }

    public function getCategoryImage($categoryId)
{
    //$categoryIdElements = explode('-', $categoryId);
    $category           = $this->categoryRepository->get($categoryId);
    $categoryImage      = $category->getImageUrl();
    return $categoryImage;
}

public function getStoreCategories($sorted = false, $asCollection = false, $toLoad = true)
{
    return $this->_categoryHelper->getStoreCategories($sorted , $asCollection, $toLoad);
}

public function storeCategoriesArray()
{

    $categories = $this->getStoreCategories(true,false,true);

    $catagoryList = array();
    foreach ($categories as $category){

        $catagoryList[$category->getEntityId()] = __($category->getName());
    }

    return $catagoryList;
}

public function getCategorymodel($id)
{
     $_category = $this->_categoryFactory->create();
        $_category->load($id);
        return $_category;
}



}
?>
