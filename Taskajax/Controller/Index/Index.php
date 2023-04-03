<?php
namespace I95dev\Taskajax\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\TemplateEngine\Xhtml\ResultFactory;

class Index extends Action
{ /**
     * @var Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory

    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);

    }

    public function execute()
    {

        $resultPage = $this->_resultPageFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__(' heading '));
        $block = $resultPage->getLayout()

                ->createBlock('I95dev\Taskajax\Block\Ajaxtask')
                ->setTemplate('I95dev_Taskajax::success.phtml')
                ->toHtml();
        $this->getResponse()->setBody($block);
    }
}
