<?php
class EasyMode_BootSlider_Block_Adminhtml_BootSlider extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		$this->_controller = 'adminhtml_bootslider';
		$this->_blockGroup = 'bootslider';
		$this->_headerText = Mage::helper('bootslider')->__('Item Manager');
		$this->_addButtonLabel = Mage::helper('bootslider')->__('Add Item');
		parent::__construct();
	}
}