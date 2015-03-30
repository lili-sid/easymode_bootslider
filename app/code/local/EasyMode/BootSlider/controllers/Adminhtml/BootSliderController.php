<?php
class EasyMode_BootSlider_Adminhtml_BootSliderController extends Mage_Adminhtml_Controller_Action
{
    
    protected function _initAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('bootslider/bootslider')
            ->_addBreadcrumb(
                Mage::helper('adminhtml')->__('Items Manager')),
                Mage::helper('adminhtml')->__('Item Manager')
            );
        return $this;
    }

    public function indexAction()
    {
			
		$this->_initAction()
            ->renderLayout();
    }

    protected function _isAllowed()
    {
    	return Mage::getSingleton('admin/session')->isAllowed('bootslider');
    }
}