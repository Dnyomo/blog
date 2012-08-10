<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/8/12
 * Time: 8:45 AM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Model_Mysql4_Post extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('blog/post', 'post_id');
    }
}