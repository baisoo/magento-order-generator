<?php
class Wage_Testorders_Helper_Data extends Mage_Core_Helper_Abstract {
    /**
     * check if input file exist
     */
    public function getInput() {
        $path = Mage::getBaseDir("var")."/testorder";
        if (!file_exists($path)) mkdir($path);

        $input = array();
        $dir = scandir($path);
        foreach($dir as $filename){
        }

        return $input;
    }

    /**
     * move input to processed files directory
     */
    public function moveInput($input) {
        $base_path = Mage::getBaseDir("var")."/testorder/";
        $target_path = $base_path . "processed";
        if (!file_exists($target_path)) mkdir($target_path);

        foreach ($input as $file) {
            rename($base.$file, $target_path.'/'.$file); 
        }
    }

    /**
     * get a test credit card number
     */
    private function getTestCC() {
        $cardArray = array(
            'VI' => '4222222222222',
            //'AE' => '378282246310005',
            //'MC' => '5555555555554444',
        );

        return $cardArray;
    }

    public function getTestCCType() {
        return array_rand($this->getTestCC());
    }

    public function getTestCCNumber($ccType)
    {
        $cards = $this->getTestCC();
        if ($cards[$ccType]) {
            return $cards[$ccType];
        }

        return null;
    }
}
