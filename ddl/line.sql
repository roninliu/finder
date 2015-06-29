/*
Navicat MySQL Data Transfer

Source Server         : 本地链接
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : finder

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-06-29 17:45:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for line
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
-- Records of line
-- ----------------------------
INSERT INTO `line` VALUES ('1', '21asdas', 'asdasd', 'asdas', 'sada', 'sasd', 'asd', 'asdasd', 'asdasd', '123', '123', '12', 'asdasd');
INSERT INTO `line` VALUES ('2', '标题', '主题', '标签出发地', '触发滴', '目的滴', '距离', '行程', '交通', '1203', '12', '1', '服务机构');
