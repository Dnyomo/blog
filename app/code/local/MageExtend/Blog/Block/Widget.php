<?php

class MageExtend_Blog_Block_Widget extends Mage_Core_Block_Abstract {
    public function _construct(){
        parent::_construct();
            if (Mage::getStoreConfig('blog_options/jquery/include_jquery_frontend')) {
                Mage::app()->getLayout()->getBlock('head')->addJs('mageextend/blog/jquery-1.7.1.min.noConflict.js');
                echo 'test';
            }
        }
    }