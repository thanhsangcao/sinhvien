<?php 
namespace WsoftPro\Sinhvien\Controller\Index;

use Magento\Framework\App\ResponseInterface;

class Index extends \Magento\Framework\App\Action\Action {
	private $resultPageFactory;

	public function __construct(
        \Magento\Framework\App\Action\Context $context,

        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
       parent::__construct($context);

        $this->resultPageFactory= $resultPageFactory;
    }

	public function execute(){
		$resultPage = $this->resultPageFactory->create();
		return $resultPage;
	

	}
}
?>