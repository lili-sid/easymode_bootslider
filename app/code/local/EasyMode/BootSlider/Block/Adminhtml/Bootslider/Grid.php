<?php
class EasyMode_BootSlider_Block_Adminhtml_BootSlider_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
			parent::__construct();
			$this->setId('bootsliderGrid');
			$this->setDefaultSort('bootslider_id');
			$this->setDefaultDir('ASC');
			$this->setSaveParametersInSession(true);
		}

		public function _prepareCollection()
		{
			$collection = Mage::getModel('bootslider/bootslider')->getCollection();
			$this->setCollection($sollection);
			return parent::_prepareCollection();
		}

		protected function _prepareColumns()
		{
			$this->addColumn('bootslider_id', array(
					'header' => Mage::helper('bootslider')->__('ID'),
					'align' => 'right',
					'width' => '50px',
					'index' => 'bootslider_id',
					'type' => 'number',
				));

			$this->addColumn('title', array(
					'header' => Mage::helper('bootslider')->__('Title'),
					'align' => 'left',
					'index' => 'title',
				));

			$this->addColumn('content', array(
					'header' => Mage::helper('bootslider')->__('Content'),
					'width' => '150px',
					'index' => 'content',
				));

			$this->addColumn('status', array(
					'header' => Mage::helper('bootslider')->__('Status'),
					'align' => 'left',
					'width' => '80px',
					'index' => 'status',
					'type' => 'options',
					'options' => array(
							1 => 'Enabled',
							2 => 'Disabled',
						),
				));
		}



}