<?php
namespace Ereactor\MyModule\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Catalog\Api\CategoryRepositoryInterface;



class UploadWidget extends Template implements BlockInterface
{
    protected $_template = "widget/categoryIcons.phtml";
    protected $catRepo;

    protected $_categoryFactory;  


    public function __construct(Template\Context $context, array $data = [], CategoryRepositoryInterface $catRepo, \Magento\Catalog\Model\CategoryFactory $categoryFactory)
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
}


    public function getCatIcon(){
    $catid = $this->getData("title");
    $catid = explode(",",$catid);
    $iconurls = [];
    foreach ($catid as $id) {
        $categoryid = $this->catRepo->get($id);
        $categoryname = $this->_categoryFactory->create()->load($id);
        $iconurls[] = array(
            'name' => $categoryname->getName(),
            'value' => $categoryid->getCustomAttribute('thumbnail')->getValue()
        );
    }
    error_log("getCatIcon");
    return $iconurls; 
    }
    public function getCategoryName()
    {
        $catid = $this->getData("title");
        $catid = explode(",",$catid);
        $catname = [];
        foreach($catid as $id){
            $category = $this->_categoryFactory->create()->load($id);
            $catname[] = $category->getName();
        }
        
        return $catname;
    }

}
?>
