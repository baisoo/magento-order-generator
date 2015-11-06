<?php 
class Wage_Testorders_Adminhtml_TestordersbackendController extends Mage_Adminhtml_Controller_Action {
    public function indexAction() {
        $this->loadLayout();
        $this->_title($this->__("Test Order(s) Generator"));
        $this->renderLayout();
    }

    /**
     * create order from ajax request
     */
    public function createAction() {
        $customer = Mage::getSingleton('customer/customer')->load(Mage::getStoreConfig('testorders/general/customerid'));
        /*empty object for sourceOrder is fine*/
        $sourceOrder = new Varien_Object();
        $sku = $this->getRequest()->getParam('sku');

        $messages = array();
        $model = Mage::getModel("testorders/simulator");
        $model->setOrderInfo($sourceOrder, $customer, $sku);
        $order = $model->create();

        if ($order && $order->getIncrementId()) {
            echo "Order #{$order->getIncrementId()} has been created from SKU : {$sku}";
        }
        else {
            echo "Test Order creation failed. Please check the module config and make sure selected shipping method and payment method are configured properly";
        }

        exit;
    }
}
