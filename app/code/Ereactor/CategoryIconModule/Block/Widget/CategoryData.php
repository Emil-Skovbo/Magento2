<?php
namespace Ereactor\CategoryIconModule\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Framework\Registry;



class CategoryData extends Template implements BlockInterface
{
    protected $_template = "widget/categoryIcons.phtml";
    protected $catRepo;
    protected $_categoryFactory;
    public function __construct(Template\Context $context, array $data = [], 
    CategoryRepositoryInterface $catRepo, \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        Registry $registry)
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
    $this->registry = $registry;
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
        $categorynametest = $this->_categoryFactory->create()->load($catidtest);
        $catinfo[] = array(
            'name' => $categoryname->getName(),
            //gets the url to the uploaded img
            'img' => $categoryid->getCustomAttribute('thumbnail')->getValue(),
            //gets the url to the category we are linking to
            'url' => $categoryname->getUrl(),
            'testurl' => "",
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
        $category = $this->getData('current_category');
        if ($category === null) {
            error_log("test2");
            $category = $this->registry->registry('current_category');
            if ($category) {
                $this->setData('current_category', $category);
                error_log("test3");
            } else {
                $category = $this->categoryRepository->get($this->getCurrentStore()->getRootCategoryId());
                $this->setData('current_category', $category);
                error_log("test4");
            }
        }
        error_log("test5");
        return $category;
    }
}
?>
