<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/8/12
 * Time: 8:49 AM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Model_Mysql4_Comment extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('blog/comment', 'comment_id');
    }
}