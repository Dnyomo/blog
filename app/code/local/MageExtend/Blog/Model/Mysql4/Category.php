<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 6/20/12
 * Time: 12:35 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Model_Mysql4_Category extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('blog/category', 'category_id');
    }
}