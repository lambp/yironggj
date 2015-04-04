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

 Date: 03/31/2015 03:14:26 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `product_image`
-- ----------------------------
DROP TABLE IF EXISTS `product_image`;
CREATE TABLE `product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(128) DEFAULT NULL COMMENT '名称',
  `url` varchar(128) DEFAULT '0' COMMENT '型号',
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `product_list`
-- ----------------------------
DROP TABLE IF EXISTS `product_list`;
CREATE TABLE `product_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL COMMENT '名称',
  `pcode` varchar(128) DEFAULT '0' COMMENT '型号',
  `message` text,
  `image` varchar(128) DEFAULT NULL,
  `top_id` int(11) DEFAULT '1' COMMENT '1,2,3,4',
  `type_id_1` int(11) DEFAULT NULL COMMENT '产品分类一级目录',
  `type_id_2` int(11) DEFAULT '0' COMMENT '二级目录',
  `click_num` int(11) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `product_list`
-- ----------------------------
BEGIN;
INSERT INTO `product_list` VALUES ('1', 'test', 'c000001', 'sssfaafa', 'product.jpg', '1', '1', '5', '12', null), ('2', 'test2', 'c000002', 'ssf', 'product.jpg', '1', '1', '5', '23', null);
COMMIT;

-- ----------------------------
--  Table structure for `product_top`
-- ----------------------------
DROP TABLE IF EXISTS `product_top`;
CREATE TABLE `product_top` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `type_id` int(4) DEFAULT NULL COMMENT '1核心产业，2工程案例',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `product_top`
-- ----------------------------
BEGIN;
INSERT INTO `product_top` VALUES ('1', '橱柜家居', '1'), ('2', '软装工程', '1'), ('3', '艺术规范', '1'), ('4', '金融服务', '1');
COMMIT;

-- ----------------------------
--  Table structure for `product_type`
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `pre_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `product_type`
-- ----------------------------
BEGIN;
INSERT INTO `product_type` VALUES ('1', '灯饰照明', '0'), ('2', '墙纸壁纸', '0'), ('3', '橱柜家具', '0'), ('4', '艺术品', '0'), ('5', '精品灯饰', '1'), ('6', 'test', '2');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
