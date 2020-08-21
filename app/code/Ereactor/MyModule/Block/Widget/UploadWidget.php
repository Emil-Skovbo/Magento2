<?php
namespace Ereactor\MyModule\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Catalog\Api\CategoryRepositoryInterface;



class UploadWidget extends Template implements BlockInterface
{
    protected $_template = "widget/categoryIcons.phtml";
    protected $catRepo;


    protected $_registry;



    public function __construct(Template\Context $context, array $data = [], CategoryRepositoryInterface $catRepo, Magento\Framework\Registry $registry)
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
    parent::__construct($context, $data);
}


    public function getCatIcon(){


    $catid = $this->getData("title");
    $catid = explode(",",$catid);
    $iconurls = [];
    foreach ($catid as $id) {
        $category = $this->catRepo->get($id);
        $iconurls[] = $category->getCustomAttribute('thumbnail')->getValue();
    }
    error_log("getCatIcon");
    return $iconurls; 
    }

    public function getCurrentCategory()
    {        
        return $this->_registry->registry('current_category');
    }


}
?>
