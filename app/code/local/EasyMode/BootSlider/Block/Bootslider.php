<?php
class EasyMode_BootSlider_Block_BootSlider extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getBootSlider()     
     { 
        if (!$this->hasData('bootslider')) {
            $this->setData('bootslider', Mage::registry('bootslider'));
        }
        return $this->getData('bootslider');
        
    }
}