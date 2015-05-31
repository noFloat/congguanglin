/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50619
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50619
File Encoding         : 65001

Date: 2015-05-31 21:05:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blog_artice`
-- ----------------------------
DROP TABLE IF EXISTS `blog_artice`;
CREATE TABLE `blog_artice` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `artice_title` varchar(32) DEFAULT NULL,
  `decoration` text,
  `artice_content` text,
  `title_img` varchar(255) DEFAULT NULL,
  `author` varchar(32) DEFAULT NULL,
  `hot` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of blog_artice
-- ----------------------------
INSERT INTO `blog_artice` VALUES ('1', '2', '34', '434', null, '343', '35', '0000-00-00');

-- ----------------------------
-- Table structure for `blog_config`
-- ----------------------------
DROP TABLE IF EXISTS `blog_config`;
CREATE TABLE `blog_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web_name` varchar(32) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `welcome_words` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='全局配置';

-- ----------------------------
-- Records of blog_config
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_message`
-- ----------------------------
DROP TABLE IF EXISTS `blog_message`;
CREATE TABLE `blog_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artice_id` int(11) NOT NULL,
  `msg_name` varchar(32) NOT NULL,
  `msg_content` text,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='留言表';

-- ----------------------------
-- Records of blog_message
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_tag`
-- ----------------------------
DROP TABLE IF EXISTS `blog_tag`;
CREATE TABLE `blog_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artice_id` int(11) DEFAULT NULL,
  `tag` varchar(32) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='书签表';

-- ----------------------------
-- Records of blog_tag
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_user`
-- ----------------------------
DROP TABLE IF EXISTS `blog_user`;
CREATE TABLE `blog_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) DEFAULT NULL,
  `user_pwd` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of blog_user
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_wechat`
-- ----------------------------
DROP TABLE IF EXISTS `blog_wechat`;
CREATE TABLE `blog_wechat` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `wechat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='微信数据表';

-- ----------------------------
-- Records of blog_wechat
-- ----------------------------
