<?php
class EasyMode_BootSlider_Block_Adminhtml_Bootslider extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		$this->_controller = 'adminhtml_bootslider';
		$this->_blockGroup = 'bootslider';
		$this->_headerText = Mage::helper('bootslider')->__('BootStrap Slider Manager');
		$this->_addButtonLabel = Mage::helper('bootslider')->__('Add Slider');
		parent::__construct();
	}
}