<?php

namespace I95dev\Review\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use I95dev\Review\Helper\Data;


class Index extends Action
{
 
    protected $helper;

   
    public function __construct(
        Context  $context,
        Data $helper
    )
    {
        $this->helper = $helper;
        
        parent::__construct($context);
    }

    
    public function execute()
    {
       echo  $this->helper->getProductReview(15);
    }
}
?>
