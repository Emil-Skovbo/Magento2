<?php
namespace Ereactor\CategoryIconModule\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\CategoryRepository;
use Magento\Catalog\Helper\Category;
use Ereactor\CategoryIconModule\Model\CategoryUrlRepository;


class CategoryData extends Template implements BlockInterface
{
    protected $_template = "widget/categoryIcons.phtml";
    protected $catRepo;
    protected $_categoryFactory;
    private $layerResolver;
    protected $_storeManager;
    protected $CategoryRepository;

    protected $_categoryHelper;
    protected $categoryFlatConfig;
    protected $topMenu;
    protected $mainTitle;
    protected $tagLine;




    public function __construct(Template\Context $context, array $data = [],
    CategoryRepositoryInterface $catRepo,
    CategoryRepository $categoryRepository,
    \Magento\Catalog\Model\CategoryFactory $categoryFactory,
    \Magento\Catalog\Model\Layer\Resolver $layerResolver,
    \Magento\Store\Model\StoreManagerInterface $storeManager,
    \Magento\Catalog\Helper\Category $catalogCategory,
    \Magento\Catalog\Helper\Category $categoryHelper,
    \Magento\Catalog\Model\Indexer\Category\Flat\State $categoryFlatState,
    \Magento\Theme\Block\Html\Topmenu $topMenu
 )
{
    $this->validator = $context->getValidator();
    $this->resolver = $context->getResolver();
    $this->_filesystem = $context->getFilesystem();
    $this->templateEnginePool = $context->getEnginePool();
    //$this->_storeManager = $context->getStoreManager();
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

    $this->_categoryHelper = $categoryHelper;
    $this->categoryFlatConfig = $categoryFlatState;
    $this->topMenu = $topMenu;
}

// makes an array based on the input from widget.xml
    public function getCatIcon(){
    $catid = $this->getData("id");
    $catid = explode(",",$catid);
    $catinfo = [];

    foreach ($catid as $id) {
        $category = $this->_categoryFactory->create();
        $categoryid = $this->catRepo->get($id);
        $categoryname = $this->_categoryFactory->create()->load($id);
        //$categorynametest = $this->_categoryFactory->create()->load($catidtest);
        $url = new CategoryUrlRepository($this->_storeManager);
        $res = $categoryname->getCustomAttributes();
        error_log(print_r($res, true));
        $catinfo[] = array(
            'name' => $categoryname->getName(),
            //gets the url to the uploaded img
            'img' => $categoryname->getImageUrl(),
            //$categoryid->getCustomAttribute('thumbnail')->getValue(),
            //gets the url to the category we are linking to
            'url' => $categoryname->getUrl(),
            'testurl2' => $this->getData("category_id"),
            'devtest' => $url->getCategoryIconUrl($categoryname,"dev98_icon")
        );
    }
    error_log("works");

    return $catinfo;
     }

}
?>
