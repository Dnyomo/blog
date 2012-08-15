<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/14/12
 * Time: 8:38 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Block_Adminhtml_Comment_Comment extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected $_addButtonLabel = 'Add New Blog Comment';

    public function __construct()
    {
        parent::__construct();
        $this->_controller = 'adminhtml_comment_comment';
        $this->_blockGroup = 'blog';
        $this->_headerText = Mage::helper('blog')->__('Blog Comment');
        $this->_addButtonLabel = Mage::helper('blog')->__('Add Blog Comment');
        parent::__construct();
    }
}