<?php

namespace I95dev\Taskajax\Plugin;

class RedirectUrl
{

    public function afterExecute(
        \Magento\Customer\Controller\Account\LoginPost $subject,
        $result)
    {
        $customUrl = 'ajaxtask/index/index';
        $result->setPath($customUrl);
        return $result;
    }

}
