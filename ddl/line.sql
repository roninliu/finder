/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Version : 50623
 Source Host           : localhost
 Source Database       : finder

 Target Server Version : 50623
 File Encoding         : utf-8

 Date: 07/10/2015 10:56:35 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `line`
-- ----------------------------
DROP TABLE IF EXISTS `line`;
CREATE TABLE `line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `places` varchar(255) NOT NULL,
  `traffic` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `child` decimal(10,0) NOT NULL,
  `leader` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `line`
-- ----------------------------
BEGIN;
INSERT INTO `line` VALUES ('1', '21asdas', 'asdasd', 'asdas', 'sada', 'sasd', 'asd', 'asdasd', 'asdasd', '123', '123', '12', 'asdasd'), ('2', '标题', '主题', '标签出发地', '触发滴', '目的滴', '距离', '行程', '交通', '1203', '12', '1', '服务机构');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
