/*
Navicat MySQL Data Transfer

Source Server         : SERVIDOR
Source Server Version : 50051
Source Host           : 192.168.0.100:3306
Source Database       : regina_maria

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2016-08-25 14:25:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_destaques`
-- ----------------------------
DROP TABLE IF EXISTS `tb_destaques`;
CREATE TABLE `tb_destaques` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) default NULL,
  `slug` varchar(120) default NULL,
  `ativo` int(11) default NULL,
  `imagem` varchar(200) default NULL,
  `link` varchar(200) default NULL,
  `externo` tinyint(4) default NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_destaques
-- ----------------------------