<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/8/12
 * Time: 8:50 AM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_Model_Category extends Mage_Core_Model_Abstract {
    protected function _construct(){
        $this->_init('blog/category');
    }
}