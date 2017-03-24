/*
Navicat MySQL Data Transfer

Source Server         : SERVIDOR
Source Server Version : 50051
Source Host           : 192.168.0.100:3306
Source Database       : regina_maria

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2016-08-25 16:26:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_conteudos`
-- ----------------------------
DROP TABLE IF EXISTS `tb_conteudos`;
CREATE TABLE `tb_conteudos` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(200) NOT NULL,
  `slug` varchar(200) default NULL,
  `sintese` varchar(250) default NULL,
  `texto` text,
  `imagem` varchar(120) default NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
