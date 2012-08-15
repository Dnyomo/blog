<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/13/12
 * Time: 9:54 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Block_Adminhtml_Post_Post extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected $_addButtonLabel = 'Add New Blog Post';

    public function __construct()
    {
        parent::__construct();
        $this->_controller = 'adminhtml_post_post';
        $this->_blockGroup = 'blog';
        $this->_headerText = Mage::helper('blog')->__('Blog Posts');
        $this->_addButtonLabel = Mage::helper('blog')->__('Add Blog Post');
        parent::__construct();
    }
}