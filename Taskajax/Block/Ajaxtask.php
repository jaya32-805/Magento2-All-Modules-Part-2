<?php

namespace I95dev\Taskajax\Block;

/*
 * I95dev Hello Block
 */

class Ajaxtask extends \Magento\Framework\View\Element\Template
{
    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * getContentForDisplay
     * @return string
     */
    public function getContentForDisplay()
    {
        return __("hello world");
    }
}
?>
