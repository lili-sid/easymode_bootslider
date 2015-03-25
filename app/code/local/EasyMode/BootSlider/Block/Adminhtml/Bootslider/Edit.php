<?php
class EasyMode_BootSlider_Block_Adminhtml_Bootslider_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
	public function __construct()
	{
		parent::__construct();
		$this->_objectId = 'id';
		$this->_blockGroup = 'bootslider';
		$this->_controller = 'adminhtml_bootslider';

		$this->updateButton('save','label',Mage::helper('bootslider')->__('Save Slider'));
		$this->updateButton('delete','label',Mage::helper('bootslider')->__('Delete Slider'));

		$this->_addButton('saveandcontinue',array(
			'label' => Mage::helper('adminhtml')->__('Save And Continue Edit'),
			'onclick' => 'saveAndContinueEdit()',
			'class' => 'save',
			),-100);

		$this->formScripts[] = "
			function toggleEditor(){
				if(tinyMCE.getInstanceById('bootslider_content') == null){
					tinyMCE.execCommand('mceAddControl',false,'bootslider_content');
				}else{
					tinyMCE.execCommand('mceRemoveControl',false,'bootslider_content');
				}
			}

			function saveAndContinueEdit(){
				editForm.submit($('edit_form').action+'back/edit/');
			}


		";

	}

	public function getHeaderText()
	{
		if(Mage::registry('bootslider_data') && Mage::registry('bootslider_data')->getId()){
			return Mage::helper('bootslider')->__("Edit Slider '%s'", $this->htmlEscape(Mage::registry('bootslider_data')->getTitle()));
		}else{
			return Mage::helper(bootslider)->__('Add Slider');
		}
	}
}