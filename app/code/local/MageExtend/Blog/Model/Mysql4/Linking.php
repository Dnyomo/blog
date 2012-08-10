<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/8/12
 * Time: 5:43 PM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Model_Mysql4_Linking extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('blog/linking', 'linking_id');
    }
}