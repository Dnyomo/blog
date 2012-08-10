<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 6/20/12
 * Time: 12:58 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Model_Mysql4_Post_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('blog/post');
    }
}