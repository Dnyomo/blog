<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/14/12
 * Time: 8:39 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Block_Adminhtml_Comment_Comment_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('CommentsGrid');
        $this->setDefaultSort('comment_id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $model = Mage::getModel('blog/comment');
        $resource = $model->getResource();
        $collection = $model->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();

    }

    protected function _prepareColumns()
    {
        $this->addColumn('comment_id', array(
            'header'    => Mage::helper('blog')->__('ID'),
            'align'     =>'right',
            'width'     => '50px',
            'index'     => 'comment_id',
        ));


        $this->addColumn('status', array(
            'header'    => Mage::helper('blog')->__('Comment Status'),
            'width'     => '150px',
            'index'     => 'status',
        ));

        $this->addColumn('name', array(
            'header'    => Mage::helper('blog')->__('Name'),
            'width'     => '150px',
            'index'     => 'name',
        ));

        $this->addColumn('content', array(
            'header'    => Mage::helper('blog')->__('Content'),
            'width'     => '150px',
            'index'     => 'content',
        ));


        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('comment_id');
        $this->getMassactionBlock()->setFormFieldName('blogcomment');

        $this->getMassactionBlock()->addItem('delete', array(
            'label'    => Mage::helper('blog')->__('Delete'),
            'url'      => $this->getUrl('*/*/massDelete'),
            'confirm'  => Mage::helper('blog')->__('Are you sure you would like to delete the selected comments?')
        ));


        return $this;
    }
}