<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/13/12
 * Time: 9:42 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Block_Adminhtml_Post_Post_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('PostsGrid');
        $this->setDefaultSort('post_id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $model = Mage::getModel('blog/post');
        $resource = $model->getResource();
        $collection = $model->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();

    }

    protected function _prepareColumns()
    {
        $this->addColumn('post_id', array(
            'header'    => Mage::helper('blog')->__('ID'),
            'align'     =>'right',
            'width'     => '50px',
            'index'     => 'post_id',
        ));


        $this->addColumn('title', array(
            'header'    => Mage::helper('blog')->__('Post Title'),
            'width'     => '150px',
            'index'     => 'title',
        ));

        $this->addColumn('author', array(
            'header'    => Mage::helper('blog')->__('Author'),
            'width'     => '150px',
            'index'     => 'author',
        ));


        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('post_id');
        $this->getMassactionBlock()->setFormFieldName('blogpost');

        $this->getMassactionBlock()->addItem('delete', array(
            'label'    => Mage::helper('blog')->__('Delete'),
            'url'      => $this->getUrl('*/*/massDelete'),
            'confirm'  => Mage::helper('blog')->__('Are you sure you would like to delete the selected posts?')
        ));


        return $this;
    }
}