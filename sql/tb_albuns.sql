/*
Navicat MySQL Data Transfer

Source Server         : SERVIDOR
Source Server Version : 50051
Source Host           : 192.168.0.100:3306
Source Database       : regina_maria

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2016-08-25 14:36:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_albuns`
-- ----------------------------
DROP TABLE IF EXISTS `tb_albuns`;
CREATE TABLE `tb_albuns` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(200) default NULL,
  `slug` varchar(200) default NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  `albuns_tipo_id` int(11) default NULL,
  `video` tinyint(4) default NULL,
  `codigo_fk` int(11) default NULL,
  `sintese` varchar(300) default NULL,
  `imagem` varchar(120) default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_fk_tb_albuns_tipos_tb_albuns` (`albuns_tipo_id`),
  CONSTRAINT `fk_fk_tb_albuns_tipos_tb_albuns` FOREIGN KEY (`albuns_tipo_id`) REFERENCES `tb_albuns_tipos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
