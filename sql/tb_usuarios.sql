/*
Navicat MySQL Data Transfer

Source Server         : SERVIDOR
Source Server Version : 50051
Source Host           : 192.168.0.100:3306
Source Database       : regina_maria

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2016-08-25 14:25:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(60) default NULL,
  `email` varchar(60) default NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  `imagem` varchar(200) default NULL,
  `funcao` varchar(50) default NULL,
  `status` tinyint(4) default NULL,
  `password` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_usuarios
-- ----------------------------
INSERT INTO `tb_usuarios` VALUES ('2', 'AQUA interativa', 'aqua@aquainterativa.com.br', '2014-07-31 15:26:16', '2015-05-15 15:54:16', 'logomarca-aqua.jpg', null, '1', '1caaa56bc5d35666b5dc4b792afa9492ba8da2bf');
