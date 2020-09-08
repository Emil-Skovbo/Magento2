<?php
namespace Ereactor\DebugController\Controller\Index;

use Magento\Eav\Model\AttributeRepository;
use Magento\Framework\Api\SearchCriteriaInterface;

class Pimcore extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $attrRepo;
    protected $searchCriteria;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        AttributeRepository $attrRepo,
        SearchCriteriaInterface $searchCriteria
    )
    {

        $this->searchCriteria = $searchCriteria;
        $this->attrRepo = $attrRepo;
        return parent::__construct($context);

    }

    public function execute()
    {
        $s = $this->searchCriteria;
        $a = $this->attrRepo->getList("catalog_category", $s)->getItems();
        echo "<pre>";
        foreach($a as $at) {
            print_r($at->getAttributeCode() . "\n");
        }
        echo "</pre>";
    }

}
