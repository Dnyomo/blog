<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/12/12
 * Time: 6:44 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Block_Adminhtml_Category_Form_Category extends Mage_Adminhtml_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('mageextend/blog/form/categories.phtml');
    }
}