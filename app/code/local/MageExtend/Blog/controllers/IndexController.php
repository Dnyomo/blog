<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/8/12
 * Time: 9:31 AM
 * To change this template use File | Settings | File Templates.
 */

class MageExtend_Blog_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $blogpost = Mage::getResourceModel('blog/linking');
        echo get_class($blogpost);
    }
}
