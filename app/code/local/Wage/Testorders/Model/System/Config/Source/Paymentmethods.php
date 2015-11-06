<?php
class Wage_Testorders_Model_System_Config_Source_Paymentmethods {
    public function toOptionArray($isMultiselect=false)
    {
        $options = array(
            'checkmo' => array('value' => 'checkmo', 'label' => 'Check / Money Order'),
            'usaepay' => array('value' => 'usaepay', 'label' => 'USAePay'),
        );

        return $options;
    }
}
