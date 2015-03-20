<?php
class EasyMode_BootSlider_Block_BootSlider extends Mage_Core_Block_Template
{
	private $_display = '0';

	public function _prepareLayout(){
		return parent::_prepareLayout();
	}

	public function getBootSlider(){
		if (!$this->hasData('bootslider')) {
			$this->setData('bootslider', Mage::registry('bootslider'));
		}
		return $this->getData('bootslider');
	}

	public function setDisplay($display){
		$this->_display = $display;
	}

	public function getBootCollection(){
		//$collection = Mage::getModel('bootslider/bootslider')->getCollection()
	}

	public function getDelayTime(){
		$delay = (int)Mage::getStoreConfig('bootslider/settings/time_delay');
		$delay = $delay * 1000;
		return $delay;
	}

	public function isShownDescription(){
		return (int)Mage::getStoreConfig('bootslider/settings/show_description');
	}

	public function getListStyle(){
		return (int)Mage::getStoreConfig('bootslider/settings/list_style');

	}

	public function getImageWidth(){
		return (int)Mage::getStoreConfig('bootslider/settings/image_width');

	}

	public function getImageHeight(){
		return (int)Mage::getStoreConfig('bootslider/settings/image_height');

	}
}