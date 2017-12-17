/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : infonews

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-12-17 15:46:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categoria`
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(85) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('1', 'Marca', '1');
INSERT INTO `categoria` VALUES ('2', 'Institucional', '1');
INSERT INTO `categoria` VALUES ('3', 'Recursos Humanos', '1');

-- ----------------------------
-- Table structure for `clipping`
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
-- Table structure for `marca`
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
-- Table structure for `noticia`
-- ----------------------------
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) unsigned NOT NULL,
  `id_marca` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(160) NOT NULL,
  `contenido` text NOT NULL,
  `img` varchar(120) DEFAULT NULL,
  `tag` text,
  `video` varchar(120) DEFAULT NULL,
  `fecha_visible` datetime DEFAULT NULL,
  `fecha_publicacion` datetime NOT NULL,
  `destacado` enum('PRINCIPAL','RRHH','MARCAS','INSTITUCIONAL') DEFAULT NULL,
  `orden` int(1) unsigned DEFAULT NULL,
  `estado` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of noticia
-- ----------------------------
INSERT INTO `noticia` VALUES ('1', '1', '1', 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed porttitor massa. In mollis sollicitudin tortor non aliquam. Nulla ut maximus leo, ac faucibus est. Vivamus tristique, tortor in venenatis ultrices, nisi urna porttitor purus, sed sollicitudin tortor metus in diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ultrices ligula at velit sollicitudin faucibus. Cras vulputate iaculis libero ut rutrum. Aliquam scelerisque nunc vel libero aliquet, et ultricies lectus tincidunt. Vestibulum egestas consequat varius. Cras id enim et neque sollicitudin luctus. Aenean sagittis, erat et porttitor congue, erat turpis consequat turpis, eu tempor orci velit quis leo. Cras et diam libero. Aenean a feugiat ipsum. Vestibulum tristique aliquet elit ac pharetra. Praesent a elit at dui imperdiet sagittis.</p>\r\n<p>Praesent egestas volutpat lectus, et aliquam ipsum rutrum et. Sed laoreet interdum libero. Etiam id justo id nisl lobortis sodales. Mauris vel metus finibus justo placerat eleifend ut sed quam. Nulla facilisi. Nulla imperdiet feugiat est, in accumsan sapien accumsan eget. Sed dapibus felis ultricies turpis maximus aliquam. Curabitur euismod iaculis nibh, vitae vehicula turpis auctor at. Duis pellentesque rutrum nulla. Nam diam lorem, finibus vel sem et, ultrices vestibulum urna. Fusce laoreet, justo nec pulvinar sodales, magna velit malesuada ipsum, nec porttitor libero quam hendrerit lorem. Quisque ut rutrum justo, id rhoncus risus. Ut et orci ultricies, sodales dolor id, facilisis odio. Nullam quis sollicitudin erat.</p>\r\n<p>Vivamus ante orci, maximus a est ac, interdum dapibus nulla. Sed vestibulum vitae elit et maximus. Sed finibus, arcu ac hendrerit elementum, odio urna cursus est, sed malesuada turpis orci eu turpis. Aenean posuere fermentum lacus a consectetur. Pellentesque commodo ex id cursus sagittis. Praesent et tristique nunc. Nulla facilisi. Nullam orci elit, sollicitudin nec malesuada nec, mollis ac magna. Sed dictum justo ac mauris aliquam scelerisque. Nullam ultricies, erat id vestibulum fringilla, mi mi ultricies velit, vestibulum convallis eros est et est. Ut dolor tellus, facilisis non elementum eget, interdum id metus.</p>\r\n<p>In sodales et dui sit amet pharetra. Phasellus neque erat, efficitur eu porta vel, porta ac massa. Vestibulum porta nulla leo, at luctus erat ultricies quis. Phasellus non nulla ac ante condimentum sollicitudin. Ut vitae enim nulla. Quisque accumsan, nisi eu hendrerit eleifend, nisi elit fringilla orci, sed tristique ipsum est in ante. Quisque tincidunt eleifend leo, in cursus felis sollicitudin aliquet. Etiam ornare velit a nisl vestibulum, at lacinia tortor luctus. Mauris non ornare ante. Nullam nisi risus, consectetur eget pretium quis, bibendum at mi. In rutrum urna varius quam porttitor, in posuere odio rhoncus. Donec volutpat, lorem at molestie fringilla, ipsum sapien maximus lectus, sed ultricies ante urna et enim. Proin vel iaculis dolor, quis varius dui. Quisque ultrices lorem nec iaculis posuere. Phasellus eu sollicitudin massa, vitae venenatis nisi. Nullam vehicula tincidunt laoreet.</p>\r\n<p>Etiam sollicitudin nibh accumsan, tristique leo eu, porta quam. Integer lacinia nulla ac ex congue, accumsan condimentum tellus eleifend. Vivamus pharetra magna eu diam finibus, eu pellentesque diam viverra. Sed pulvinar ullamcorper magna efficitur consectetur. Duis accumsan et nunc finibus rutrum. Pellentesque convallis tincidunt vestibulum. Mauris congue dapibus diam. Vivamus porta consectetur dignissim.</p>', 'index_slider-image01.jpg', 'loremp, ipsum, tag', null, '2017-12-15 16:18:27', '2017-12-15 16:18:31', 'PRINCIPAL', '1', '1');
INSERT INTO `noticia` VALUES ('2', '1', '2', 'Vivamus ante orci', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed porttitor massa. In mollis sollicitudin tortor non aliquam. Nulla ut maximus leo, ac faucibus est. Vivamus tristique, tortor in venenatis ultrices, nisi urna porttitor purus, sed sollicitudin tortor metus in diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ultrices ligula at velit sollicitudin faucibus. Cras vulputate iaculis libero ut rutrum. Aliquam scelerisque nunc vel libero aliquet, et ultricies lectus tincidunt. Vestibulum egestas consequat varius. Cras id enim et neque sollicitudin luctus. Aenean sagittis, erat et porttitor congue, erat turpis consequat turpis, eu tempor orci velit quis leo. Cras et diam libero. Aenean a feugiat ipsum. Vestibulum tristique aliquet elit ac pharetra. Praesent a elit at dui imperdiet sagittis.</p>\r\n<p>Praesent egestas volutpat lectus, et aliquam ipsum rutrum et. Sed laoreet interdum libero. Etiam id justo id nisl lobortis sodales. Mauris vel metus finibus justo placerat eleifend ut sed quam. Nulla facilisi. Nulla imperdiet feugiat est, in accumsan sapien accumsan eget. Sed dapibus felis ultricies turpis maximus aliquam. Curabitur euismod iaculis nibh, vitae vehicula turpis auctor at. Duis pellentesque rutrum nulla. Nam diam lorem, finibus vel sem et, ultrices vestibulum urna. Fusce laoreet, justo nec pulvinar sodales, magna velit malesuada ipsum, nec porttitor libero quam hendrerit lorem. Quisque ut rutrum justo, id rhoncus risus. Ut et orci ultricies, sodales dolor id, facilisis odio. Nullam quis sollicitudin erat.</p>\r\n<p>Vivamus ante orci, maximus a est ac, interdum dapibus nulla. Sed vestibulum vitae elit et maximus. Sed finibus, arcu ac hendrerit elementum, odio urna cursus est, sed malesuada turpis orci eu turpis. Aenean posuere fermentum lacus a consectetur. Pellentesque commodo ex id cursus sagittis. Praesent et tristique nunc. Nulla facilisi. Nullam orci elit, sollicitudin nec malesuada nec, mollis ac magna. Sed dictum justo ac mauris aliquam scelerisque. Nullam ultricies, erat id vestibulum fringilla, mi mi ultricies velit, vestibulum convallis eros est et est. Ut dolor tellus, facilisis non elementum eget, interdum id metus.</p>\r\n<p>In sodales et dui sit amet pharetra. Phasellus neque erat, efficitur eu porta vel, porta ac massa. Vestibulum porta nulla leo, at luctus erat ultricies quis. Phasellus non nulla ac ante condimentum sollicitudin. Ut vitae enim nulla. Quisque accumsan, nisi eu hendrerit eleifend, nisi elit fringilla orci, sed tristique ipsum est in ante. Quisque tincidunt eleifend leo, in cursus felis sollicitudin aliquet. Etiam ornare velit a nisl vestibulum, at lacinia tortor luctus. Mauris non ornare ante. Nullam nisi risus, consectetur eget pretium quis, bibendum at mi. In rutrum urna varius quam porttitor, in posuere odio rhoncus. Donec volutpat, lorem at molestie fringilla, ipsum sapien maximus lectus, sed ultricies ante urna et enim. Proin vel iaculis dolor, quis varius dui. Quisque ultrices lorem nec iaculis posuere. Phasellus eu sollicitudin massa, vitae venenatis nisi. Nullam vehicula tincidunt laoreet.</p>\r\n<p>Etiam sollicitudin nibh accumsan, tristique leo eu, porta quam. Integer lacinia nulla ac ex congue, accumsan condimentum tellus eleifend. Vivamus pharetra magna eu diam finibus, eu pellentesque diam viverra. Sed pulvinar ullamcorper magna efficitur consectetur. Duis accumsan et nunc finibus rutrum. Pellentesque convallis tincidunt vestibulum. Mauris congue dapibus diam. Vivamus porta consectetur dignissim.</p>', 'index_slider-image06.jpg', 'loremp, ipsum, tag', null, '2017-12-15 16:21:02', '2017-12-15 16:20:58', 'PRINCIPAL', '2', '1');
INSERT INTO `noticia` VALUES ('3', '1', '3', 'Praesent egestas volutpat lectus', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed porttitor massa. In mollis sollicitudin tortor non aliquam. Nulla ut maximus leo, ac faucibus est. Vivamus tristique, tortor in venenatis ultrices, nisi urna porttitor purus, sed sollicitudin tortor metus in diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ultrices ligula at velit sollicitudin faucibus. Cras vulputate iaculis libero ut rutrum. Aliquam scelerisque nunc vel libero aliquet, et ultricies lectus tincidunt. Vestibulum egestas consequat varius. Cras id enim et neque sollicitudin luctus. Aenean sagittis, erat et porttitor congue, erat turpis consequat turpis, eu tempor orci velit quis leo. Cras et diam libero. Aenean a feugiat ipsum. Vestibulum tristique aliquet elit ac pharetra. Praesent a elit at dui imperdiet sagittis.</p>\r\n<p>Praesent egestas volutpat lectus, et aliquam ipsum rutrum et. Sed laoreet interdum libero. Etiam id justo id nisl lobortis sodales. Mauris vel metus finibus justo placerat eleifend ut sed quam. Nulla facilisi. Nulla imperdiet feugiat est, in accumsan sapien accumsan eget. Sed dapibus felis ultricies turpis maximus aliquam. Curabitur euismod iaculis nibh, vitae vehicula turpis auctor at. Duis pellentesque rutrum nulla. Nam diam lorem, finibus vel sem et, ultrices vestibulum urna. Fusce laoreet, justo nec pulvinar sodales, magna velit malesuada ipsum, nec porttitor libero quam hendrerit lorem. Quisque ut rutrum justo, id rhoncus risus. Ut et orci ultricies, sodales dolor id, facilisis odio. Nullam quis sollicitudin erat.</p>\r\n<p>Vivamus ante orci, maximus a est ac, interdum dapibus nulla. Sed vestibulum vitae elit et maximus. Sed finibus, arcu ac hendrerit elementum, odio urna cursus est, sed malesuada turpis orci eu turpis. Aenean posuere fermentum lacus a consectetur. Pellentesque commodo ex id cursus sagittis. Praesent et tristique nunc. Nulla facilisi. Nullam orci elit, sollicitudin nec malesuada nec, mollis ac magna. Sed dictum justo ac mauris aliquam scelerisque. Nullam ultricies, erat id vestibulum fringilla, mi mi ultricies velit, vestibulum convallis eros est et est. Ut dolor tellus, facilisis non elementum eget, interdum id metus.</p>\r\n<p>In sodales et dui sit amet pharetra. Phasellus neque erat, efficitur eu porta vel, porta ac massa. Vestibulum porta nulla leo, at luctus erat ultricies quis. Phasellus non nulla ac ante condimentum sollicitudin. Ut vitae enim nulla. Quisque accumsan, nisi eu hendrerit eleifend, nisi elit fringilla orci, sed tristique ipsum est in ante. Quisque tincidunt eleifend leo, in cursus felis sollicitudin aliquet. Etiam ornare velit a nisl vestibulum, at lacinia tortor luctus. Mauris non ornare ante. Nullam nisi risus, consectetur eget pretium quis, bibendum at mi. In rutrum urna varius quam porttitor, in posuere odio rhoncus. Donec volutpat, lorem at molestie fringilla, ipsum sapien maximus lectus, sed ultricies ante urna et enim. Proin vel iaculis dolor, quis varius dui. Quisque ultrices lorem nec iaculis posuere. Phasellus eu sollicitudin massa, vitae venenatis nisi. Nullam vehicula tincidunt laoreet.</p>\r\n<p>Etiam sollicitudin nibh accumsan, tristique leo eu, porta quam. Integer lacinia nulla ac ex congue, accumsan condimentum tellus eleifend. Vivamus pharetra magna eu diam finibus, eu pellentesque diam viverra. Sed pulvinar ullamcorper magna efficitur consectetur. Duis accumsan et nunc finibus rutrum. Pellentesque convallis tincidunt vestibulum. Mauris congue dapibus diam. Vivamus porta consectetur dignissim.</p>', 'index_slider-image07.jpg', 'loremp, ipsum, tag', null, '2017-12-15 16:22:01', '2017-12-15 16:21:50', 'PRINCIPAL', '3', '1');
INSERT INTO `noticia` VALUES ('4', '1', '4', 'In sodales et dui sit amet pharetra', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed porttitor massa. In mollis sollicitudin tortor non aliquam. Nulla ut maximus leo, ac faucibus est. Vivamus tristique, tortor in venenatis ultrices, nisi urna porttitor purus, sed sollicitudin tortor metus in diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ultrices ligula at velit sollicitudin faucibus. Cras vulputate iaculis libero ut rutrum. Aliquam scelerisque nunc vel libero aliquet, et ultricies lectus tincidunt. Vestibulum egestas consequat varius. Cras id enim et neque sollicitudin luctus. Aenean sagittis, erat et porttitor congue, erat turpis consequat turpis, eu tempor orci velit quis leo. Cras et diam libero. Aenean a feugiat ipsum. Vestibulum tristique aliquet elit ac pharetra. Praesent a elit at dui imperdiet sagittis.</p>\r\n<p>Praesent egestas volutpat lectus, et aliquam ipsum rutrum et. Sed laoreet interdum libero. Etiam id justo id nisl lobortis sodales. Mauris vel metus finibus justo placerat eleifend ut sed quam. Nulla facilisi. Nulla imperdiet feugiat est, in accumsan sapien accumsan eget. Sed dapibus felis ultricies turpis maximus aliquam. Curabitur euismod iaculis nibh, vitae vehicula turpis auctor at. Duis pellentesque rutrum nulla. Nam diam lorem, finibus vel sem et, ultrices vestibulum urna. Fusce laoreet, justo nec pulvinar sodales, magna velit malesuada ipsum, nec porttitor libero quam hendrerit lorem. Quisque ut rutrum justo, id rhoncus risus. Ut et orci ultricies, sodales dolor id, facilisis odio. Nullam quis sollicitudin erat.</p>\r\n<p>Vivamus ante orci, maximus a est ac, interdum dapibus nulla. Sed vestibulum vitae elit et maximus. Sed finibus, arcu ac hendrerit elementum, odio urna cursus est, sed malesuada turpis orci eu turpis. Aenean posuere fermentum lacus a consectetur. Pellentesque commodo ex id cursus sagittis. Praesent et tristique nunc. Nulla facilisi. Nullam orci elit, sollicitudin nec malesuada nec, mollis ac magna. Sed dictum justo ac mauris aliquam scelerisque. Nullam ultricies, erat id vestibulum fringilla, mi mi ultricies velit, vestibulum convallis eros est et est. Ut dolor tellus, facilisis non elementum eget, interdum id metus.</p>\r\n<p>In sodales et dui sit amet pharetra. Phasellus neque erat, efficitur eu porta vel, porta ac massa. Vestibulum porta nulla leo, at luctus erat ultricies quis. Phasellus non nulla ac ante condimentum sollicitudin. Ut vitae enim nulla. Quisque accumsan, nisi eu hendrerit eleifend, nisi elit fringilla orci, sed tristique ipsum est in ante. Quisque tincidunt eleifend leo, in cursus felis sollicitudin aliquet. Etiam ornare velit a nisl vestibulum, at lacinia tortor luctus. Mauris non ornare ante. Nullam nisi risus, consectetur eget pretium quis, bibendum at mi. In rutrum urna varius quam porttitor, in posuere odio rhoncus. Donec volutpat, lorem at molestie fringilla, ipsum sapien maximus lectus, sed ultricies ante urna et enim. Proin vel iaculis dolor, quis varius dui. Quisque ultrices lorem nec iaculis posuere. Phasellus eu sollicitudin massa, vitae venenatis nisi. Nullam vehicula tincidunt laoreet.</p>\r\n<p>Etiam sollicitudin nibh accumsan, tristique leo eu, porta quam. Integer lacinia nulla ac ex congue, accumsan condimentum tellus eleifend. Vivamus pharetra magna eu diam finibus, eu pellentesque diam viverra. Sed pulvinar ullamcorper magna efficitur consectetur. Duis accumsan et nunc finibus rutrum. Pellentesque convallis tincidunt vestibulum. Mauris congue dapibus diam. Vivamus porta consectetur dignissim.</p>', 'index_slider-image08.jpg', 'loremp, ipsum, tag', null, '2017-12-15 16:22:01', '2017-12-15 16:22:42', 'PRINCIPAL', '4', '1');
INSERT INTO `noticia` VALUES ('5', '3', null, 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique ultrices fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent ullamcorper dictum leo quis vehicula. Sed vel purus accumsan, congue magna vitae, tempor dolor. Integer euismod ante et nulla consectetur, eu ullamcorper neque semper. Donec nec ligula lectus. Proin tempus, sem sit amet tincidunt ornare, sapien nisi volutpat lacus, rutrum cursus ex nibh consequat magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus suscipit dapibus accumsan.</p>\r\n<p>Morbi lobortis aliquam orci, fermentum varius mi imperdiet id. Vivamus in nisl a magna viverra hendrerit. Morbi tempor ligula at dolor facilisis volutpat. Sed interdum sapien at magna ultrices, et tristique enim sollicitudin. Phasellus id neque vel nunc scelerisque dignissim. Donec non aliquet ex. Sed congue sit amet arcu sed aliquam. Nullam sed metus congue, blandit ante sagittis, dapibus massa. Nunc blandit dictum ipsum nec euismod. Integer quis dapibus erat. Sed ac felis at arcu tincidunt efficitur. Integer id molestie dui. Donec scelerisque, nisl eget ultricies lacinia, mi ipsum suscipit massa, non fermentum purus enim vitae elit. Praesent maximus, augue ut auctor condimentum, justo nisl tristique mauris, tincidunt mattis libero sapien non ante. Sed faucibus, est eu luctus semper, mauris lectus faucibus massa, sit amet molestie enim mi eu enim.</p>\r\n<p>Morbi viverra ipsum eget tortor laoreet tempor. Aliquam blandit libero vitae dolor ultricies, sit amet ultrices lectus blandit. Quisque gravida quam ac enim tristique bibendum sed in diam. Vivamus et dui in dolor pharetra ullamcorper. Aenean placerat, velit at pharetra elementum, diam felis tristique turpis, in rhoncus ligula arcu in massa. Etiam et mauris varius, dignissim dolor non, mollis sapien. Integer libero diam, rhoncus sed tincidunt sed, suscipit nec tellus. Cras posuere erat est. Morbi vel interdum sem. Donec volutpat, enim quis volutpat interdum, diam metus blandit tellus, nec venenatis quam turpis ac dolor.</p>\r\n<p>Mauris faucibus lobortis imperdiet. Nam vel dui vel lectus mattis rhoncus eu non lorem. In interdum mauris in aliquam efficitur. Quisque auctor laoreet laoreet. Pellentesque consequat leo metus, quis finibus tellus convallis quis. Nullam et ligula sit amet odio mattis suscipit et eget ex. Ut dictum felis a tellus iaculis, sit amet tincidunt magna placerat. Suspendisse luctus aliquet tristique. Etiam cursus ornare tortor, eu feugiat nisi cursus ac. Morbi laoreet quam leo, ut laoreet turpis tempor et. Donec at ligula sit amet augue maximus gravida. In hac habitasse platea dictumst.</p>\r\n<p>Duis maximus nisl quis neque fermentum interdum. In hac habitasse platea dictumst. Donec interdum, purus nec feugiat vulputate, erat felis sodales metus, ac interdum dolor est et est. Nam ut ultricies velit, commodo convallis ligula. Curabitur sed sapien risus. Aliquam eu ex eros. Maecenas congue, est sed laoreet dapibus, turpis turpis molestie mi, id convallis tortor sem blandit enim. Proin est mauris, tincidunt ut scelerisque id, tincidunt nec odio. In ultricies, turpis eget pulvinar lobortis, erat massa varius ipsum, et porta lacus mauris dignissim libero. Vestibulum malesuada varius purus, eget accumsan risus iaculis et. Fusce et erat imperdiet, pellentesque metus at, pellentesque ante. Vivamus at convallis ligula. Nullam sed purus odio. Integer sed lacus nibh. Duis tristique eu augue tempus efficitur. Morbi iaculis tortor quis nunc dignissim, sed porta dolor convallis.</p>', 'index_800x400-image05.jpg', 'loremp, ipsum, tag', null, '2017-12-15 10:53:40', '2017-12-15 10:53:36', 'RRHH', '1', '1');
INSERT INTO `noticia` VALUES ('6', '3', null, 'Morbi lobortis aliquam orci', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique ultrices fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent ullamcorper dictum leo quis vehicula. Sed vel purus accumsan, congue magna vitae, tempor dolor. Integer euismod ante et nulla consectetur, eu ullamcorper neque semper. Donec nec ligula lectus. Proin tempus, sem sit amet tincidunt ornare, sapien nisi volutpat lacus, rutrum cursus ex nibh consequat magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus suscipit dapibus accumsan.</p>\r\n<p>Morbi lobortis aliquam orci, fermentum varius mi imperdiet id. Vivamus in nisl a magna viverra hendrerit. Morbi tempor ligula at dolor facilisis volutpat. Sed interdum sapien at magna ultrices, et tristique enim sollicitudin. Phasellus id neque vel nunc scelerisque dignissim. Donec non aliquet ex. Sed congue sit amet arcu sed aliquam. Nullam sed metus congue, blandit ante sagittis, dapibus massa. Nunc blandit dictum ipsum nec euismod. Integer quis dapibus erat. Sed ac felis at arcu tincidunt efficitur. Integer id molestie dui. Donec scelerisque, nisl eget ultricies lacinia, mi ipsum suscipit massa, non fermentum purus enim vitae elit. Praesent maximus, augue ut auctor condimentum, justo nisl tristique mauris, tincidunt mattis libero sapien non ante. Sed faucibus, est eu luctus semper, mauris lectus faucibus massa, sit amet molestie enim mi eu enim.</p>\r\n<p>Morbi viverra ipsum eget tortor laoreet tempor. Aliquam blandit libero vitae dolor ultricies, sit amet ultrices lectus blandit. Quisque gravida quam ac enim tristique bibendum sed in diam. Vivamus et dui in dolor pharetra ullamcorper. Aenean placerat, velit at pharetra elementum, diam felis tristique turpis, in rhoncus ligula arcu in massa. Etiam et mauris varius, dignissim dolor non, mollis sapien. Integer libero diam, rhoncus sed tincidunt sed, suscipit nec tellus. Cras posuere erat est. Morbi vel interdum sem. Donec volutpat, enim quis volutpat interdum, diam metus blandit tellus, nec venenatis quam turpis ac dolor.</p>\r\n<p>Mauris faucibus lobortis imperdiet. Nam vel dui vel lectus mattis rhoncus eu non lorem. In interdum mauris in aliquam efficitur. Quisque auctor laoreet laoreet. Pellentesque consequat leo metus, quis finibus tellus convallis quis. Nullam et ligula sit amet odio mattis suscipit et eget ex. Ut dictum felis a tellus iaculis, sit amet tincidunt magna placerat. Suspendisse luctus aliquet tristique. Etiam cursus ornare tortor, eu feugiat nisi cursus ac. Morbi laoreet quam leo, ut laoreet turpis tempor et. Donec at ligula sit amet augue maximus gravida. In hac habitasse platea dictumst.</p>\r\n<p>Duis maximus nisl quis neque fermentum interdum. In hac habitasse platea dictumst. Donec interdum, purus nec feugiat vulputate, erat felis sodales metus, ac interdum dolor est et est. Nam ut ultricies velit, commodo convallis ligula. Curabitur sed sapien risus. Aliquam eu ex eros. Maecenas congue, est sed laoreet dapibus, turpis turpis molestie mi, id convallis tortor sem blandit enim. Proin est mauris, tincidunt ut scelerisque id, tincidunt nec odio. In ultricies, turpis eget pulvinar lobortis, erat massa varius ipsum, et porta lacus mauris dignissim libero. Vestibulum malesuada varius purus, eget accumsan risus iaculis et. Fusce et erat imperdiet, pellentesque metus at, pellentesque ante. Vivamus at convallis ligula. Nullam sed purus odio. Integer sed lacus nibh. Duis tristique eu augue tempus efficitur. Morbi iaculis tortor quis nunc dignissim, sed porta dolor convallis.</p>', 'index_800x400-image05.jpg', 'loremp, ipsum, tag', null, '2017-12-15 11:04:06', '2017-12-15 11:04:01', 'RRHH', '2', '1');
INSERT INTO `noticia` VALUES ('7', '3', null, 'Morbi viverra ipsum eget tortor laoreet tempor', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique ultrices fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent ullamcorper dictum leo quis vehicula. Sed vel purus accumsan, congue magna vitae, tempor dolor. Integer euismod ante et nulla consectetur, eu ullamcorper neque semper. Donec nec ligula lectus. Proin tempus, sem sit amet tincidunt ornare, sapien nisi volutpat lacus, rutrum cursus ex nibh consequat magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus suscipit dapibus accumsan.</p>\r\n<p>Morbi lobortis aliquam orci, fermentum varius mi imperdiet id. Vivamus in nisl a magna viverra hendrerit. Morbi tempor ligula at dolor facilisis volutpat. Sed interdum sapien at magna ultrices, et tristique enim sollicitudin. Phasellus id neque vel nunc scelerisque dignissim. Donec non aliquet ex. Sed congue sit amet arcu sed aliquam. Nullam sed metus congue, blandit ante sagittis, dapibus massa. Nunc blandit dictum ipsum nec euismod. Integer quis dapibus erat. Sed ac felis at arcu tincidunt efficitur. Integer id molestie dui. Donec scelerisque, nisl eget ultricies lacinia, mi ipsum suscipit massa, non fermentum purus enim vitae elit. Praesent maximus, augue ut auctor condimentum, justo nisl tristique mauris, tincidunt mattis libero sapien non ante. Sed faucibus, est eu luctus semper, mauris lectus faucibus massa, sit amet molestie enim mi eu enim.</p>\r\n<p>Morbi viverra ipsum eget tortor laoreet tempor. Aliquam blandit libero vitae dolor ultricies, sit amet ultrices lectus blandit. Quisque gravida quam ac enim tristique bibendum sed in diam. Vivamus et dui in dolor pharetra ullamcorper. Aenean placerat, velit at pharetra elementum, diam felis tristique turpis, in rhoncus ligula arcu in massa. Etiam et mauris varius, dignissim dolor non, mollis sapien. Integer libero diam, rhoncus sed tincidunt sed, suscipit nec tellus. Cras posuere erat est. Morbi vel interdum sem. Donec volutpat, enim quis volutpat interdum, diam metus blandit tellus, nec venenatis quam turpis ac dolor.</p>\r\n<p>Mauris faucibus lobortis imperdiet. Nam vel dui vel lectus mattis rhoncus eu non lorem. In interdum mauris in aliquam efficitur. Quisque auctor laoreet laoreet. Pellentesque consequat leo metus, quis finibus tellus convallis quis. Nullam et ligula sit amet odio mattis suscipit et eget ex. Ut dictum felis a tellus iaculis, sit amet tincidunt magna placerat. Suspendisse luctus aliquet tristique. Etiam cursus ornare tortor, eu feugiat nisi cursus ac. Morbi laoreet quam leo, ut laoreet turpis tempor et. Donec at ligula sit amet augue maximus gravida. In hac habitasse platea dictumst.</p>\r\n<p>Duis maximus nisl quis neque fermentum interdum. In hac habitasse platea dictumst. Donec interdum, purus nec feugiat vulputate, erat felis sodales metus, ac interdum dolor est et est. Nam ut ultricies velit, commodo convallis ligula. Curabitur sed sapien risus. Aliquam eu ex eros. Maecenas congue, est sed laoreet dapibus, turpis turpis molestie mi, id convallis tortor sem blandit enim. Proin est mauris, tincidunt ut scelerisque id, tincidunt nec odio. In ultricies, turpis eget pulvinar lobortis, erat massa varius ipsum, et porta lacus mauris dignissim libero. Vestibulum malesuada varius purus, eget accumsan risus iaculis et. Fusce et erat imperdiet, pellentesque metus at, pellentesque ante. Vivamus at convallis ligula. Nullam sed purus odio. Integer sed lacus nibh. Duis tristique eu augue tempus efficitur. Morbi iaculis tortor quis nunc dignissim, sed porta dolor convallis.</p>', 'index_800x400-image05.jpg', 'loremp, ipsum, tag', null, '2017-12-15 14:55:52', '2017-12-15 14:55:48', 'RRHH', '3', '1');
INSERT INTO `noticia` VALUES ('8', '3', null, 'Mauris faucibus lobortis imperdiet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique ultrices fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent ullamcorper dictum leo quis vehicula. Sed vel purus accumsan, congue magna vitae, tempor dolor. Integer euismod ante et nulla consectetur, eu ullamcorper neque semper. Donec nec ligula lectus. Proin tempus, sem sit amet tincidunt ornare, sapien nisi volutpat lacus, rutrum cursus ex nibh consequat magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus suscipit dapibus accumsan.</p>\r\n<p>Morbi lobortis aliquam orci, fermentum varius mi imperdiet id. Vivamus in nisl a magna viverra hendrerit. Morbi tempor ligula at dolor facilisis volutpat. Sed interdum sapien at magna ultrices, et tristique enim sollicitudin. Phasellus id neque vel nunc scelerisque dignissim. Donec non aliquet ex. Sed congue sit amet arcu sed aliquam. Nullam sed metus congue, blandit ante sagittis, dapibus massa. Nunc blandit dictum ipsum nec euismod. Integer quis dapibus erat. Sed ac felis at arcu tincidunt efficitur. Integer id molestie dui. Donec scelerisque, nisl eget ultricies lacinia, mi ipsum suscipit massa, non fermentum purus enim vitae elit. Praesent maximus, augue ut auctor condimentum, justo nisl tristique mauris, tincidunt mattis libero sapien non ante. Sed faucibus, est eu luctus semper, mauris lectus faucibus massa, sit amet molestie enim mi eu enim.</p>\r\n<p>Morbi viverra ipsum eget tortor laoreet tempor. Aliquam blandit libero vitae dolor ultricies, sit amet ultrices lectus blandit. Quisque gravida quam ac enim tristique bibendum sed in diam. Vivamus et dui in dolor pharetra ullamcorper. Aenean placerat, velit at pharetra elementum, diam felis tristique turpis, in rhoncus ligula arcu in massa. Etiam et mauris varius, dignissim dolor non, mollis sapien. Integer libero diam, rhoncus sed tincidunt sed, suscipit nec tellus. Cras posuere erat est. Morbi vel interdum sem. Donec volutpat, enim quis volutpat interdum, diam metus blandit tellus, nec venenatis quam turpis ac dolor.</p>\r\n<p>Mauris faucibus lobortis imperdiet. Nam vel dui vel lectus mattis rhoncus eu non lorem. In interdum mauris in aliquam efficitur. Quisque auctor laoreet laoreet. Pellentesque consequat leo metus, quis finibus tellus convallis quis. Nullam et ligula sit amet odio mattis suscipit et eget ex. Ut dictum felis a tellus iaculis, sit amet tincidunt magna placerat. Suspendisse luctus aliquet tristique. Etiam cursus ornare tortor, eu feugiat nisi cursus ac. Morbi laoreet quam leo, ut laoreet turpis tempor et. Donec at ligula sit amet augue maximus gravida. In hac habitasse platea dictumst.</p>\r\n<p>Duis maximus nisl quis neque fermentum interdum. In hac habitasse platea dictumst. Donec interdum, purus nec feugiat vulputate, erat felis sodales metus, ac interdum dolor est et est. Nam ut ultricies velit, commodo convallis ligula. Curabitur sed sapien risus. Aliquam eu ex eros. Maecenas congue, est sed laoreet dapibus, turpis turpis molestie mi, id convallis tortor sem blandit enim. Proin est mauris, tincidunt ut scelerisque id, tincidunt nec odio. In ultricies, turpis eget pulvinar lobortis, erat massa varius ipsum, et porta lacus mauris dignissim libero. Vestibulum malesuada varius purus, eget accumsan risus iaculis et. Fusce et erat imperdiet, pellentesque metus at, pellentesque ante. Vivamus at convallis ligula. Nullam sed purus odio. Integer sed lacus nibh. Duis tristique eu augue tempus efficitur. Morbi iaculis tortor quis nunc dignissim, sed porta dolor convallis.</p>', 'index_800x400-image05.jpg', 'loremp, ipsum, tag', null, '2017-12-15 14:59:16', '2017-12-15 14:59:19', 'RRHH', '4', '1');

-- ----------------------------
-- Table structure for `promocion`
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
  `fecha_publicacion` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promocion
-- ----------------------------
INSERT INTO `promocion` VALUES ('1', '1', 'Promoción Cerato', '<p>Cerato 2018 contado Desde $17.990, cuotas desde 340</p>', 'Banner_CERATO_sinpromo.jpg', 'cerato, promocion', '1', '1', '2017-12-17 14:53:23', '1');
INSERT INTO `promocion` VALUES ('2', '3', 'Comienza la Aventura', '<p>G310R contado desde $6.800, cuotas desde $195.</p>', 'BMW-G310R_6x12_APP.jpg', 'g310r,bmw,motorrad', '1', '2', '2017-12-17 11:54:10', '1');
INSERT INTO `promocion` VALUES ('3', '6', 'Redifiniendo tecnología y confort', '<p>Dodge Durango. Entrega desde $1.000, cuotas desde $865.</p>', 'Durango_6x12.jpg', 'dodge,durango, promo 1000', '1', '3', '2017-12-17 14:53:31', '1');
INSERT INTO `promocion` VALUES ('4', '9', 'Pasate a un Sentra', '<p>Nissan Sentra, entrega desde $1.000 y cuotas desde $356.</p>', 'nissan_sentra_dic.jpg', 'nissan,sentra,promo 1000', '1', '4', '2017-12-15 11:59:47', '1');
