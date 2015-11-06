<?php
class Wage_Testorders_Model_System_Config_Source_Shippingmethods {
    public function toOptionArray($isMultiselect=false)
    {
        $options = array(
            'flatrate_flatrate' => array('value' => 'flatrate_flatrate', 'label' => 'Flat Rate'),
        );

        return $options;
    }
}
