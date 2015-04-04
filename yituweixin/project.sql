/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 50616
 Source Host           : localhost
 Source Database       : yituweixin

 Target Server Type    : MySQL
 Target Server Version : 50616
 File Encoding         : utf-8

 Date: 04/04/2015 03:12:45 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `project`
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `typeid` int(11) DEFAULT NULL,
  `message` text,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `project`
-- ----------------------------
BEGIN;
INSERT INTO `project` VALUES ('1', '高端定制1', 'product.jpg', '1', null, null), ('2', '高端定制2', 'product.jpg', '1', null, null), ('3', '高端定制3', 'product.jpg', '1', null, null), ('4', '高端定制4', 'product.jpg', '1', null, null), ('5', '高端定制5', 'product.jpg', '1', null, null), ('6', '高端定制6', 'product.jpg', '1', null, null), ('7', '工程案例', 'product.jpg', '2', null, null), ('8', '工程案例2', 'product.jpg', '2', null, null), ('9', '工程案例3', 'product.jpg', '2', null, null), ('10', '工程案例4', 'product.jpg', '2', null, null), ('11', '产品出口1', 'product.jpg', '3', null, null), ('12', '产品出口2', 'product.jpg', '3', null, null), ('13', '产品出口3', 'product.jpg', '3', null, null), ('14', '产品出口4', 'product.jpg', '3', null, null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
