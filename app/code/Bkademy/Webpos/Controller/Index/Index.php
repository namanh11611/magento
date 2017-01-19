<?php
namespace Bkademy\Webpos\Controller\Index;

/**
 * Class Index
 * @package Bkademy\Webpos\Controller\Index
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        echo "Hello World";
    }
}