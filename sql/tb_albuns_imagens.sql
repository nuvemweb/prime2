/*
Navicat MySQL Data Transfer

Source Server         : SERVIDOR
Source Server Version : 50051
Source Host           : 192.168.0.100:3306
Source Database       : regina_maria

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2016-08-25 14:36:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_albuns_imagens`
-- ----------------------------
DROP TABLE IF EXISTS `tb_albuns_imagens`;
CREATE TABLE `tb_albuns_imagens` (
  `id` int(11) NOT NULL auto_increment,
  `album_id` int(11) NOT NULL,
  `imagem` varchar(120) NOT NULL,
  `descricao` varchar(80) default NULL,
  `legenda` varchar(100) default NULL,
  `ordem` int(11) default NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_tb_albuns_imagens_tb_albuns` (`album_id`),
  CONSTRAINT `fk_tb_albuns_imagens_tb_albuns` FOREIGN KEY (`album_id`) REFERENCES `tb_albuns` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
