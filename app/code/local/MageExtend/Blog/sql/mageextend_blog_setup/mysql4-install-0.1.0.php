<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dnyomo
 * Date: 8/6/12
 * Time: 8:48 PM
 * To change this template use File | Settings | File Templates.
 */

$installer = $this;
$installer->startSetup();

$installer->run("DROP TABLE IF EXISTS " . $installer->getTable('blog/category'));
$installer->run("DROP TABLE IF EXISTS " . $installer->getTable('blog/post'));
$installer->run("DROP TABLE IF EXISTS " . $installer->getTable('blog/comment'));
$installer->run("DROP TABLE IF EXISTS " . $installer->getTable('blog/linking'));

$installer->run("
CREATE TABLE " . $installer->getTable('blog/category') . "(
`category_id` int(11) NOT NULL AUTO_INCREMENT,
`parent_id` int(11) NOT NULL,
`name` varchar(50) NOT NULL,
`status` varchar(50) NOT NULL,
PRIMARY KEY (`category_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->run("
CREATE TABLE " . $installer->getTable('blog/post') . "(
`post_id` int(11) NOT NULL AUTO_INCREMENT,
`Title` varchar(400) DEFAULT NULL,
`post_time` datetime DEFAULT NULL,
`author` varchar(50) DEFAULT NULL,
`tags` varchar(400) DEFAULT NULL,
`content` text DEFAULT NULL,
`status` varchar(50) NOT NULL,
`timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
PRIMARY KEY (`post_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->run("
CREATE TABLE " . $installer->getTable('blog/comment') . "(
`comment_id` int(11) NOT NULL AUTO_INCREMENT,
`post_id` int(11) NOT NULL,
`name` varchar(50) NOT NULL,
`content` text NOT NULL,
`status` varchar(50) NOT NULL,
`timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
PRIMARY KEY (`comment_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->run("
CREATE TABLE " . $installer->getTable('blog/linking') . "(
`linking_id` int(11) NOT NULL AUTO_INCREMENT,
`post_id` int(11) NOT NULL,
`category_id` int(11) NOT NULL,
PRIMARY KEY (`linking_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->endSetup();