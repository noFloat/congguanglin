/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50619
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50619
File Encoding         : 65001

Date: 2015-06-02 20:56:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for exam_article
-- ----------------------------
DROP TABLE IF EXISTS `exam_article`;
CREATE TABLE `exam_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exam_article
-- ----------------------------
INSERT INTO `exam_article` VALUES ('11', '伍珍妮是逗比', '54321', '1', '2015-05-31 14:39:33');
INSERT INTO `exam_article` VALUES ('13', '更好', '54321', '1', '2015-05-31 14:40:52');
INSERT INTO `exam_article` VALUES ('14', '更好', '54321', '1', '2015-05-31 14:41:24');
INSERT INTO `exam_article` VALUES ('15', '交流看连连看了', '54321', 'xin', '2015-05-31 15:03:04');
INSERT INTO `exam_article` VALUES ('16', '科联看l', '54321', 'xin', '2015-05-31 15:03:07');
INSERT INTO `exam_article` VALUES ('17', '离开了看', '54321', 'xin', '2015-05-31 15:03:09');
INSERT INTO `exam_article` VALUES ('18', '科联看看', '54321', 'xin', '2015-05-31 15:03:12');
INSERT INTO `exam_article` VALUES ('19', '科联看看', '54321', 'xin', '2015-05-31 15:03:14');
INSERT INTO `exam_article` VALUES ('20', 'i ', '54321', 'xin', '2015-05-31 15:04:10');
INSERT INTO `exam_article` VALUES ('21', 'i ', '54321', 'xin', '2015-05-31 15:04:35');
INSERT INTO `exam_article` VALUES ('22', 'i ', '54321', 'xin', '2015-05-31 15:04:37');
INSERT INTO `exam_article` VALUES ('23', '看看', '54321', 'xin', '2015-05-31 15:04:45');
INSERT INTO `exam_article` VALUES ('24', 'ui', '54321', 'xin', '2015-05-31 15:05:09');
INSERT INTO `exam_article` VALUES ('25', '科联看看', '54321', 'xin', '2015-05-31 15:06:34');

-- ----------------------------
-- Table structure for exam_remark
-- ----------------------------
DROP TABLE IF EXISTS `exam_remark`;
CREATE TABLE `exam_remark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `remark_content` varchar(255) NOT NULL,
  `remark_user` varchar(255) NOT NULL,
  `remark_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exam_remark
-- ----------------------------
INSERT INTO `exam_remark` VALUES ('9', '9', '89+8+', '54321', '2015-05-31 20:43:25');

-- ----------------------------
-- Table structure for exam_user
-- ----------------------------
DROP TABLE IF EXISTS `exam_user`;
CREATE TABLE `exam_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exam_user
-- ----------------------------
INSERT INTO `exam_user` VALUES ('1', '123456789', '', '0');
INSERT INTO `exam_user` VALUES ('2', '123456789', '6f8db367f3ec0dc18d608d2f37e9c1e0', '0');
INSERT INTO `exam_user` VALUES ('3', '123456789', '6f8db367f3ec0dc18d608d2f37e9c1e0', '0');
INSERT INTO `exam_user` VALUES ('4', '12345678', '6f8db367f3ec0dc18d608d2f37e9c1e0', '0');
INSERT INTO `exam_user` VALUES ('5', '12345678', '6f8db367f3ec0dc18d608d2f37e9c1e0', '0');
INSERT INTO `exam_user` VALUES ('6', '12345678', '6f8db367f3ec0dc18d608d2f37e9c1e0', '0');
INSERT INTO `exam_user` VALUES ('7', '123456789', '', '0');
INSERT INTO `exam_user` VALUES ('8', 'ioi', '', '0');
INSERT INTO `exam_user` VALUES ('9', 'ioi', '', '0');
INSERT INTO `exam_user` VALUES ('10', 'uiui', '', '0');
INSERT INTO `exam_user` VALUES ('11', 'uiui', '', '0');
INSERT INTO `exam_user` VALUES ('12', 'uiui', '', '0');
INSERT INTO `exam_user` VALUES ('13', 'uiui', '', '0');
INSERT INTO `exam_user` VALUES ('14', 'uiuik', '', '0');
INSERT INTO `exam_user` VALUES ('15', 'uiuikui', '6f8db367f3ec0dc18d608d2f37e9c1e0', '0');
INSERT INTO `exam_user` VALUES ('16', 'uiuikuih', '6f8db367f3ec0dc18d608d2f37e9c1e0', '0');
INSERT INTO `exam_user` VALUES ('17', 'uiuikuihu', '6f8db367f3ec0dc18d608d2f37e9c1e0', '0');
INSERT INTO `exam_user` VALUES ('18', '55', '68938480e7ac051e94a39133e1754b2f', '0');
INSERT INTO `exam_user` VALUES ('19', '555', '612755c8dc4409a98f45f3d3749d18a9', '0');
INSERT INTO `exam_user` VALUES ('20', '444', '18318226954074c06838966c484c54c0', '0');
INSERT INTO `exam_user` VALUES ('21', '12', 'ad6eceff8672fb35eafdf9b2509f3758', '0');
INSERT INTO `exam_user` VALUES ('22', '43', '8852794250b76ce946c6e42992d3b9e4', '0');
INSERT INTO `exam_user` VALUES ('23', '422', 'f0c1f1a8f5bdc51a49684f87fdabf862', '0');
INSERT INTO `exam_user` VALUES ('24', '4222', '8f755d14eab732f5f8de12a047e42dcb', '0');
INSERT INTO `exam_user` VALUES ('25', '42222', '38cb4721b66bf6c4392200cfbe66c0e0', '0');
INSERT INTO `exam_user` VALUES ('26', '4399', '0739fd0fb79c0fe1bd046213dfa7e1ae', '0');
INSERT INTO `exam_user` VALUES ('27', '1', 'd120d12d6c2628dde1648b58e44a65ec', '0');
INSERT INTO `exam_user` VALUES ('28', '439999', '0739fd0fb79c0fe1bd046213dfa7e1ae', '0');
INSERT INTO `exam_user` VALUES ('29', '54', '6dc49faffecc7f70a4b64113aa7ede73', '0');
INSERT INTO `exam_user` VALUES ('30', '54321', '961cb7fcaadb04bd1aea928b8a9f67f2', '0');
