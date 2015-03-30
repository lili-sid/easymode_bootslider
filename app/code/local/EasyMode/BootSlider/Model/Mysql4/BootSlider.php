<?php

class EasyMode_BootSlider_Model_Mysql4_BootSlider extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the bootslider_id refers to the key field in your database table.
        $this->_init('bootslider/bootslider', 'bootslider_id');
    }
}