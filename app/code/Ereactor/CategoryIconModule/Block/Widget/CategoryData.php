<?php
namespace Ereactor\CategoryIconModule\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\CategoryRepository;
use Ereactor\CategoryIconModule\Model\CategoryUrlRepository;

class CategoryData extends Template implements BlockInterface
{
    protected $_template = "widget/categoryIcons.phtml";
    protected $catRepo;
    protected $_categoryFactory;
    protected $CategoryRepository;
    public function __construct(Template\Context $context, array $data = [],
    CategoryRepositoryInterface $catRepo,
    CategoryRepository $categoryRepository,
    \Magento\Catalog\Model\CategoryFactory $categoryFactory
 )
{
    $this->validator = $context->getValidator();
    $this->resolver = $context->getResolver();
    $this->_filesystem = $context->getFilesystem();
    $this->templateEnginePool = $context->getEnginePool();
    $this->_appState = $context->getAppState();
    $this->templateContext = $this;
    $this->pageConfig = $context->getPageConfig();
    $this->catRepo = $catRepo;
    $this->_categoryFactory = $categoryFactory;
    parent::__construct($context, $data);
    $this->categoryRepository = $categoryRepository;
}

// makes an array based on the input from widget.xml
    public function getCatIcon(){
    $catid = $this->getData("id");
    $catid = explode(",",$catid);
    $catinfo = [];
    foreach ($catid as $id) {
        $categoryid = $this->catRepo->get($id);
        $category = $this->_categoryFactory->create();
        $categoryname = $this->_categoryFactory->create()->load($id);
        $url = new CategoryUrlRepository($this->_storeManager);
        $res = $categoryname->getCustomAttributes();
        $catinfo[] = array(
            'name' => $categoryname->getName(),
            //gets the url to the uploaded img
            'img' => $categoryname->getImageUrl(),
            //gets the url to the category we are linking to
            'url' => $categoryname->getUrl(),
            'testurl2' => $res,
            //'testurl3' => $categoryid->getCustomAttribute('thumbnail')->getValue(),
            'testurl4' => $url->getCategoryIconUrl($categoryname,"thumbnail"),
            'devtest' => $url->getCategoryIconUrl($categoryname,"category_icon")
        );
    }
    return $catinfo;
     }
}
?>
