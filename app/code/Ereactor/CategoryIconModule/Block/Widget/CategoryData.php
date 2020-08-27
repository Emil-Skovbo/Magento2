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
        $categoryname = $this->_categoryFactory->create()->load($id);
        //$categorynametest = $this->_categoryFactory->create()->load($catidtest);

        $catinfo[] = array(
            'name' => $categoryname->getName(),
            //gets the url to the uploaded img
            'img' => $categoryname->getImageUrl(),
            //$categoryid->getCustomAttribute('thumbnail')->getValue(),
            //gets the url to the category we are linking to
            'url' => $categoryname->getUrl(),
            'testurl2' => $this->getData("category_id")
        );
    }
    error_log("works");
    return $catinfo;
     }

    public function getCategoryHelper()
    {
        return $this->_categoryHelper;
    }

    public function getCategorymodel($id)
    {
         $_category = $this->_categoryFactory->create();
            $_category->load($id);
            return $_category;
    }
    /**
     * Retrieve current store categories
     *
     * @param bool|string $sorted
     * @param bool $asCollection
     * @param bool $toLoad
     * @return \Magento\Framework\Data\Tree\Node\Collection|\Magento\Catalog\Model\Resource\Category\Collection|array
     */

    /**
     * Retrieve collection of selected categories
    */
   public function getCategoryCollection()
    {
        $rootCat = $this->getData('id');
        $category = $this->_categoryFactory->create();
        $collection = $category
                      ->getCollection()
                      ->addAttributeToSelect('image')
                      ->addIdFilter($rootCat);
        return $collection;
    }
}
?>
