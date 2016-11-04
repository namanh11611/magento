<?php
/**
 * Created by PhpStorm.
 * User: NamAnh
 * Date: 04-Nov-16
 * Time: 9:43 AM
 */
namespace Magestore\HelloMagento\Observer;

use Magento\Framework\Event\ObserverInterface;

class ProcessFrontFinalPriceObserver implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        // Ở đây, product đang là dạng model product do chúng ta tuỳ chỉnh, chỉ có id, price và status
        $product = $observer->getData('product');

        \Zend_Debug::dump('Process in Source code');
        print_R($product->getFinalPrice());
        die;

        // Làm tiếp ở đây nhé, làm sao xử lý cho ổn, lấy event gốc của nó và sửa giá

//        $pId = $product->getId();
//        $storeId = $product->getStoreId();
//
//        \Zend_Debug::dump('Process in Source code');
//        echo "<pre>"."Id: ";
//        print_R($product->getId());
//        echo "<pre>"."Price: ";
//        print_R($product->getPrice());
//        echo "<pre>"."FinalPrice: ";
//        print_R($product->getFinalPrice());
//        echo "<pre>";
//        \Zend_Debug::dump($pId);
//        \Zend_Debug::dump($storeId);

    }
}