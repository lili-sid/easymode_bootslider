<?php

class EasyMode_BootSlider_Model_BootSlider extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('bootslider/bootslider');
    }
}