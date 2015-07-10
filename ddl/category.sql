/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Version : 50623
 Source Host           : localhost
 Source Database       : finder

 Target Server Version : 50623
 File Encoding         : utf-8

 Date: 07/10/2015 10:56:19 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `is_main` int(11) NOT NULL DEFAULT '0',
  `c_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `category`
-- ----------------------------
BEGIN;
INSERT INTO `category` VALUES ('1', '信息管理', '1', '0'), ('2', '用户管理', '1', '0'), ('3', '消息中心', '1', '0'), ('4', '个人中心', '1', '0'), ('11', '自驾线路', '0', '1'), ('12', '领队信息', '0', '1'), ('13', '影像信息', '0', '1'), ('14', '亲子旅游', '0', '11'), ('15', '学习进修', '0', '11');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
