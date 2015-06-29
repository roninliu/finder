/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Version : 50623
 Source Host           : localhost
 Source Database       : finder

 Target Server Version : 50623
 File Encoding         : utf-8

 Date: 06/29/2015 14:29:15 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_main` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `category`
-- ----------------------------
BEGIN;
INSERT INTO `category` VALUES ('1', '自驾路线', '1', '-1'), ('2', '领队信息', '1', '-1'), ('3', '影像信息', '1', '-1');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
