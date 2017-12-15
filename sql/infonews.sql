/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : infonews

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-12-15 18:17:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(85) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('1', 'Marca', '1');
INSERT INTO `categoria` VALUES ('2', 'Institucional', '1');

-- ----------------------------
-- Table structure for clipping
-- ----------------------------
DROP TABLE IF EXISTS `clipping`;
CREATE TABLE `clipping` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(160) DEFAULT NULL,
  `img` varchar(120) DEFAULT NULL,
  `fecha_visible` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `fecha_publicacion` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clipping
-- ----------------------------

-- ----------------------------
-- Table structure for marca
-- ----------------------------
DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of marca
-- ----------------------------
INSERT INTO `marca` VALUES ('1', 'Kia', '1');
INSERT INTO `marca` VALUES ('2', 'Chevrolet', '1');
INSERT INTO `marca` VALUES ('3', 'BMW Motorrad', '1');
INSERT INTO `marca` VALUES ('4', 'MINI', '1');
INSERT INTO `marca` VALUES ('5', 'Jeep', '1');
INSERT INTO `marca` VALUES ('6', 'Dodge', '1');
INSERT INTO `marca` VALUES ('7', 'Chrysler', '1');
INSERT INTO `marca` VALUES ('8', 'Mazda', '1');
INSERT INTO `marca` VALUES ('9', 'Nissan', '1');
INSERT INTO `marca` VALUES ('10', 'Mopar', '1');
INSERT INTO `marca` VALUES ('11', 'División Usados', '1');

-- ----------------------------
-- Table structure for noticia
-- ----------------------------
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) unsigned NOT NULL,
  `id_marca` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(160) NOT NULL,
  `contenido` text NOT NULL,
  `img` varchar(80) DEFAULT NULL,
  `tag` text,
  `fecha_visible` datetime DEFAULT NULL,
  `fecha_publicacion` datetime NOT NULL,
  `destacado` int(1) unsigned DEFAULT '0',
  `orden` int(1) unsigned DEFAULT NULL,
  `estado` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of noticia
-- ----------------------------
INSERT INTO `noticia` VALUES ('1', '1', '1', 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed porttitor massa. In mollis sollicitudin tortor non aliquam. Nulla ut maximus leo, ac faucibus est. Vivamus tristique, tortor in venenatis ultrices, nisi urna porttitor purus, sed sollicitudin tortor metus in diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ultrices ligula at velit sollicitudin faucibus. Cras vulputate iaculis libero ut rutrum. Aliquam scelerisque nunc vel libero aliquet, et ultricies lectus tincidunt. Vestibulum egestas consequat varius. Cras id enim et neque sollicitudin luctus. Aenean sagittis, erat et porttitor congue, erat turpis consequat turpis, eu tempor orci velit quis leo. Cras et diam libero. Aenean a feugiat ipsum. Vestibulum tristique aliquet elit ac pharetra. Praesent a elit at dui imperdiet sagittis.</p>\r\n<p>Praesent egestas volutpat lectus, et aliquam ipsum rutrum et. Sed laoreet interdum libero. Etiam id justo id nisl lobortis sodales. Mauris vel metus finibus justo placerat eleifend ut sed quam. Nulla facilisi. Nulla imperdiet feugiat est, in accumsan sapien accumsan eget. Sed dapibus felis ultricies turpis maximus aliquam. Curabitur euismod iaculis nibh, vitae vehicula turpis auctor at. Duis pellentesque rutrum nulla. Nam diam lorem, finibus vel sem et, ultrices vestibulum urna. Fusce laoreet, justo nec pulvinar sodales, magna velit malesuada ipsum, nec porttitor libero quam hendrerit lorem. Quisque ut rutrum justo, id rhoncus risus. Ut et orci ultricies, sodales dolor id, facilisis odio. Nullam quis sollicitudin erat.</p>\r\n<p>Vivamus ante orci, maximus a est ac, interdum dapibus nulla. Sed vestibulum vitae elit et maximus. Sed finibus, arcu ac hendrerit elementum, odio urna cursus est, sed malesuada turpis orci eu turpis. Aenean posuere fermentum lacus a consectetur. Pellentesque commodo ex id cursus sagittis. Praesent et tristique nunc. Nulla facilisi. Nullam orci elit, sollicitudin nec malesuada nec, mollis ac magna. Sed dictum justo ac mauris aliquam scelerisque. Nullam ultricies, erat id vestibulum fringilla, mi mi ultricies velit, vestibulum convallis eros est et est. Ut dolor tellus, facilisis non elementum eget, interdum id metus.</p>\r\n<p>In sodales et dui sit amet pharetra. Phasellus neque erat, efficitur eu porta vel, porta ac massa. Vestibulum porta nulla leo, at luctus erat ultricies quis. Phasellus non nulla ac ante condimentum sollicitudin. Ut vitae enim nulla. Quisque accumsan, nisi eu hendrerit eleifend, nisi elit fringilla orci, sed tristique ipsum est in ante. Quisque tincidunt eleifend leo, in cursus felis sollicitudin aliquet. Etiam ornare velit a nisl vestibulum, at lacinia tortor luctus. Mauris non ornare ante. Nullam nisi risus, consectetur eget pretium quis, bibendum at mi. In rutrum urna varius quam porttitor, in posuere odio rhoncus. Donec volutpat, lorem at molestie fringilla, ipsum sapien maximus lectus, sed ultricies ante urna et enim. Proin vel iaculis dolor, quis varius dui. Quisque ultrices lorem nec iaculis posuere. Phasellus eu sollicitudin massa, vitae venenatis nisi. Nullam vehicula tincidunt laoreet.</p>\r\n<p>Etiam sollicitudin nibh accumsan, tristique leo eu, porta quam. Integer lacinia nulla ac ex congue, accumsan condimentum tellus eleifend. Vivamus pharetra magna eu diam finibus, eu pellentesque diam viverra. Sed pulvinar ullamcorper magna efficitur consectetur. Duis accumsan et nunc finibus rutrum. Pellentesque convallis tincidunt vestibulum. Mauris congue dapibus diam. Vivamus porta consectetur dignissim.</p>', 'index_slider-image01.jpg', 'loremp, ipsum, tag', '2017-12-15 16:18:27', '2017-12-15 16:18:31', '1', '1', '1');
INSERT INTO `noticia` VALUES ('2', '1', '2', 'Vivamus ante orci', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed porttitor massa. In mollis sollicitudin tortor non aliquam. Nulla ut maximus leo, ac faucibus est. Vivamus tristique, tortor in venenatis ultrices, nisi urna porttitor purus, sed sollicitudin tortor metus in diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ultrices ligula at velit sollicitudin faucibus. Cras vulputate iaculis libero ut rutrum. Aliquam scelerisque nunc vel libero aliquet, et ultricies lectus tincidunt. Vestibulum egestas consequat varius. Cras id enim et neque sollicitudin luctus. Aenean sagittis, erat et porttitor congue, erat turpis consequat turpis, eu tempor orci velit quis leo. Cras et diam libero. Aenean a feugiat ipsum. Vestibulum tristique aliquet elit ac pharetra. Praesent a elit at dui imperdiet sagittis.</p>\r\n<p>Praesent egestas volutpat lectus, et aliquam ipsum rutrum et. Sed laoreet interdum libero. Etiam id justo id nisl lobortis sodales. Mauris vel metus finibus justo placerat eleifend ut sed quam. Nulla facilisi. Nulla imperdiet feugiat est, in accumsan sapien accumsan eget. Sed dapibus felis ultricies turpis maximus aliquam. Curabitur euismod iaculis nibh, vitae vehicula turpis auctor at. Duis pellentesque rutrum nulla. Nam diam lorem, finibus vel sem et, ultrices vestibulum urna. Fusce laoreet, justo nec pulvinar sodales, magna velit malesuada ipsum, nec porttitor libero quam hendrerit lorem. Quisque ut rutrum justo, id rhoncus risus. Ut et orci ultricies, sodales dolor id, facilisis odio. Nullam quis sollicitudin erat.</p>\r\n<p>Vivamus ante orci, maximus a est ac, interdum dapibus nulla. Sed vestibulum vitae elit et maximus. Sed finibus, arcu ac hendrerit elementum, odio urna cursus est, sed malesuada turpis orci eu turpis. Aenean posuere fermentum lacus a consectetur. Pellentesque commodo ex id cursus sagittis. Praesent et tristique nunc. Nulla facilisi. Nullam orci elit, sollicitudin nec malesuada nec, mollis ac magna. Sed dictum justo ac mauris aliquam scelerisque. Nullam ultricies, erat id vestibulum fringilla, mi mi ultricies velit, vestibulum convallis eros est et est. Ut dolor tellus, facilisis non elementum eget, interdum id metus.</p>\r\n<p>In sodales et dui sit amet pharetra. Phasellus neque erat, efficitur eu porta vel, porta ac massa. Vestibulum porta nulla leo, at luctus erat ultricies quis. Phasellus non nulla ac ante condimentum sollicitudin. Ut vitae enim nulla. Quisque accumsan, nisi eu hendrerit eleifend, nisi elit fringilla orci, sed tristique ipsum est in ante. Quisque tincidunt eleifend leo, in cursus felis sollicitudin aliquet. Etiam ornare velit a nisl vestibulum, at lacinia tortor luctus. Mauris non ornare ante. Nullam nisi risus, consectetur eget pretium quis, bibendum at mi. In rutrum urna varius quam porttitor, in posuere odio rhoncus. Donec volutpat, lorem at molestie fringilla, ipsum sapien maximus lectus, sed ultricies ante urna et enim. Proin vel iaculis dolor, quis varius dui. Quisque ultrices lorem nec iaculis posuere. Phasellus eu sollicitudin massa, vitae venenatis nisi. Nullam vehicula tincidunt laoreet.</p>\r\n<p>Etiam sollicitudin nibh accumsan, tristique leo eu, porta quam. Integer lacinia nulla ac ex congue, accumsan condimentum tellus eleifend. Vivamus pharetra magna eu diam finibus, eu pellentesque diam viverra. Sed pulvinar ullamcorper magna efficitur consectetur. Duis accumsan et nunc finibus rutrum. Pellentesque convallis tincidunt vestibulum. Mauris congue dapibus diam. Vivamus porta consectetur dignissim.</p>', 'index_slider-image06.jpg', 'loremp, ipsum, tag', '2017-12-15 16:21:02', '2017-12-15 16:20:58', '1', '2', '1');
INSERT INTO `noticia` VALUES ('3', '1', '3', 'Praesent egestas volutpat lectus', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed porttitor massa. In mollis sollicitudin tortor non aliquam. Nulla ut maximus leo, ac faucibus est. Vivamus tristique, tortor in venenatis ultrices, nisi urna porttitor purus, sed sollicitudin tortor metus in diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ultrices ligula at velit sollicitudin faucibus. Cras vulputate iaculis libero ut rutrum. Aliquam scelerisque nunc vel libero aliquet, et ultricies lectus tincidunt. Vestibulum egestas consequat varius. Cras id enim et neque sollicitudin luctus. Aenean sagittis, erat et porttitor congue, erat turpis consequat turpis, eu tempor orci velit quis leo. Cras et diam libero. Aenean a feugiat ipsum. Vestibulum tristique aliquet elit ac pharetra. Praesent a elit at dui imperdiet sagittis.</p>\r\n<p>Praesent egestas volutpat lectus, et aliquam ipsum rutrum et. Sed laoreet interdum libero. Etiam id justo id nisl lobortis sodales. Mauris vel metus finibus justo placerat eleifend ut sed quam. Nulla facilisi. Nulla imperdiet feugiat est, in accumsan sapien accumsan eget. Sed dapibus felis ultricies turpis maximus aliquam. Curabitur euismod iaculis nibh, vitae vehicula turpis auctor at. Duis pellentesque rutrum nulla. Nam diam lorem, finibus vel sem et, ultrices vestibulum urna. Fusce laoreet, justo nec pulvinar sodales, magna velit malesuada ipsum, nec porttitor libero quam hendrerit lorem. Quisque ut rutrum justo, id rhoncus risus. Ut et orci ultricies, sodales dolor id, facilisis odio. Nullam quis sollicitudin erat.</p>\r\n<p>Vivamus ante orci, maximus a est ac, interdum dapibus nulla. Sed vestibulum vitae elit et maximus. Sed finibus, arcu ac hendrerit elementum, odio urna cursus est, sed malesuada turpis orci eu turpis. Aenean posuere fermentum lacus a consectetur. Pellentesque commodo ex id cursus sagittis. Praesent et tristique nunc. Nulla facilisi. Nullam orci elit, sollicitudin nec malesuada nec, mollis ac magna. Sed dictum justo ac mauris aliquam scelerisque. Nullam ultricies, erat id vestibulum fringilla, mi mi ultricies velit, vestibulum convallis eros est et est. Ut dolor tellus, facilisis non elementum eget, interdum id metus.</p>\r\n<p>In sodales et dui sit amet pharetra. Phasellus neque erat, efficitur eu porta vel, porta ac massa. Vestibulum porta nulla leo, at luctus erat ultricies quis. Phasellus non nulla ac ante condimentum sollicitudin. Ut vitae enim nulla. Quisque accumsan, nisi eu hendrerit eleifend, nisi elit fringilla orci, sed tristique ipsum est in ante. Quisque tincidunt eleifend leo, in cursus felis sollicitudin aliquet. Etiam ornare velit a nisl vestibulum, at lacinia tortor luctus. Mauris non ornare ante. Nullam nisi risus, consectetur eget pretium quis, bibendum at mi. In rutrum urna varius quam porttitor, in posuere odio rhoncus. Donec volutpat, lorem at molestie fringilla, ipsum sapien maximus lectus, sed ultricies ante urna et enim. Proin vel iaculis dolor, quis varius dui. Quisque ultrices lorem nec iaculis posuere. Phasellus eu sollicitudin massa, vitae venenatis nisi. Nullam vehicula tincidunt laoreet.</p>\r\n<p>Etiam sollicitudin nibh accumsan, tristique leo eu, porta quam. Integer lacinia nulla ac ex congue, accumsan condimentum tellus eleifend. Vivamus pharetra magna eu diam finibus, eu pellentesque diam viverra. Sed pulvinar ullamcorper magna efficitur consectetur. Duis accumsan et nunc finibus rutrum. Pellentesque convallis tincidunt vestibulum. Mauris congue dapibus diam. Vivamus porta consectetur dignissim.</p>', 'index_slider-image07.jpg', 'loremp, ipsum, tag', '2017-12-15 16:22:01', '2017-12-15 16:21:50', '1', '3', '1');
INSERT INTO `noticia` VALUES ('4', '1', '4', 'In sodales et dui sit amet pharetra', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed porttitor massa. In mollis sollicitudin tortor non aliquam. Nulla ut maximus leo, ac faucibus est. Vivamus tristique, tortor in venenatis ultrices, nisi urna porttitor purus, sed sollicitudin tortor metus in diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ultrices ligula at velit sollicitudin faucibus. Cras vulputate iaculis libero ut rutrum. Aliquam scelerisque nunc vel libero aliquet, et ultricies lectus tincidunt. Vestibulum egestas consequat varius. Cras id enim et neque sollicitudin luctus. Aenean sagittis, erat et porttitor congue, erat turpis consequat turpis, eu tempor orci velit quis leo. Cras et diam libero. Aenean a feugiat ipsum. Vestibulum tristique aliquet elit ac pharetra. Praesent a elit at dui imperdiet sagittis.</p>\r\n<p>Praesent egestas volutpat lectus, et aliquam ipsum rutrum et. Sed laoreet interdum libero. Etiam id justo id nisl lobortis sodales. Mauris vel metus finibus justo placerat eleifend ut sed quam. Nulla facilisi. Nulla imperdiet feugiat est, in accumsan sapien accumsan eget. Sed dapibus felis ultricies turpis maximus aliquam. Curabitur euismod iaculis nibh, vitae vehicula turpis auctor at. Duis pellentesque rutrum nulla. Nam diam lorem, finibus vel sem et, ultrices vestibulum urna. Fusce laoreet, justo nec pulvinar sodales, magna velit malesuada ipsum, nec porttitor libero quam hendrerit lorem. Quisque ut rutrum justo, id rhoncus risus. Ut et orci ultricies, sodales dolor id, facilisis odio. Nullam quis sollicitudin erat.</p>\r\n<p>Vivamus ante orci, maximus a est ac, interdum dapibus nulla. Sed vestibulum vitae elit et maximus. Sed finibus, arcu ac hendrerit elementum, odio urna cursus est, sed malesuada turpis orci eu turpis. Aenean posuere fermentum lacus a consectetur. Pellentesque commodo ex id cursus sagittis. Praesent et tristique nunc. Nulla facilisi. Nullam orci elit, sollicitudin nec malesuada nec, mollis ac magna. Sed dictum justo ac mauris aliquam scelerisque. Nullam ultricies, erat id vestibulum fringilla, mi mi ultricies velit, vestibulum convallis eros est et est. Ut dolor tellus, facilisis non elementum eget, interdum id metus.</p>\r\n<p>In sodales et dui sit amet pharetra. Phasellus neque erat, efficitur eu porta vel, porta ac massa. Vestibulum porta nulla leo, at luctus erat ultricies quis. Phasellus non nulla ac ante condimentum sollicitudin. Ut vitae enim nulla. Quisque accumsan, nisi eu hendrerit eleifend, nisi elit fringilla orci, sed tristique ipsum est in ante. Quisque tincidunt eleifend leo, in cursus felis sollicitudin aliquet. Etiam ornare velit a nisl vestibulum, at lacinia tortor luctus. Mauris non ornare ante. Nullam nisi risus, consectetur eget pretium quis, bibendum at mi. In rutrum urna varius quam porttitor, in posuere odio rhoncus. Donec volutpat, lorem at molestie fringilla, ipsum sapien maximus lectus, sed ultricies ante urna et enim. Proin vel iaculis dolor, quis varius dui. Quisque ultrices lorem nec iaculis posuere. Phasellus eu sollicitudin massa, vitae venenatis nisi. Nullam vehicula tincidunt laoreet.</p>\r\n<p>Etiam sollicitudin nibh accumsan, tristique leo eu, porta quam. Integer lacinia nulla ac ex congue, accumsan condimentum tellus eleifend. Vivamus pharetra magna eu diam finibus, eu pellentesque diam viverra. Sed pulvinar ullamcorper magna efficitur consectetur. Duis accumsan et nunc finibus rutrum. Pellentesque convallis tincidunt vestibulum. Mauris congue dapibus diam. Vivamus porta consectetur dignissim.</p>', 'index_slider-image08.jpg', 'loremp, ipsum, tag', '2017-12-15 16:22:01', '2017-12-15 16:22:42', '1', '4', '1');

-- ----------------------------
-- Table structure for promocion
-- ----------------------------
DROP TABLE IF EXISTS `promocion`;
CREATE TABLE `promocion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_marca` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(180) DEFAULT NULL,
  `contenido` text,
  `img` varchar(85) DEFAULT NULL,
  `tag` text,
  `destacado` int(1) unsigned DEFAULT NULL,
  `orden` int(1) unsigned DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promocion
-- ----------------------------
SET FOREIGN_KEY_CHECKS=1;
