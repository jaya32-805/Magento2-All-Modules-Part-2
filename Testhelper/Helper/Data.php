<?php

namespace I95dev\Testhelper\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
       public function getStoreConfig()
       {
               return __("Testhelper");
       }
}
