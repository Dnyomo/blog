<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/10/12
 * Time: 8:50 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Adminhtml_BlogcommentsController extends Mage_Adminhtml_Controller_action
{
    protected function _initAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('blog/comment')
            ->_addBreadcrumb(Mage::helper('adminhtml')->__('Blog Comments Manager'), Mage::helper('adminhtml')->__('Blog Comments Manager'));
        return $this;
    }
    public function indexAction() {
        $this->_initAction();
        $this->renderLayout();
    }
}