<?php
class EasyMode_BootSlider_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/bootslider?id=15 
    	 *  or
    	 * http://site.com/bootslider/id/15 	
    	 */
    	/* 
		$bootslider_id = $this->getRequest()->getParam('id');

  		if($bootslider_id != null && $bootslider_id != '')	{
			$bootslider = Mage::getModel('bootslider/bootslider')->load($bootslider_id)->getData();
		} else {
			$bootslider = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($bootslider == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$bootsliderTable = $resource->getTableName('bootslider');
			
			$select = $read->select()
			   ->from($bootsliderTable,array('bootslider_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$bootslider = $read->fetchRow($select);
		}
		Mage::register('bootslider', $bootslider);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}