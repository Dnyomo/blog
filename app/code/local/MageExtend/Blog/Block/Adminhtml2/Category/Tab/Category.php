<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/10/12
 * Time: 9:50 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Block_Adminhtml_Category_Tab_Category extends Mage_Adminhtml_Block_Catalog_Category_Tree
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('mageextend/blog/edit/categories.phtml');
    }
}