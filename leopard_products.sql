/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80020
 Source Host           : localhost:3306
 Source Schema         : leopard_products

 Target Server Type    : MySQL
 Target Server Version : 80020
 File Encoding         : 65001

 Date: 16/07/2020 21:46:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_product
-- ----------------------------
DROP TABLE IF EXISTS `t_product`;
CREATE TABLE `t_product`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `detail` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `time` datetime(0) NULL DEFAULT NULL,
  `category` int(0) NULL DEFAULT NULL,
  `feature` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_product
-- ----------------------------
INSERT INTO `t_product` VALUES (1, '/AETR1D1.png', 'Infrared Thermometer', 'AET-R1D1', '<li>Product Size : 37mm × 37mm × 138mm (L x W x H)</li>\r\n<li>Product Weight : 47g</li>\r\n<li>Memory : 32 groups</li>\r\n<li>Operating temp : 5°C~40°C</li>\r\n<li>Measuring mode : Forehead mode</li>\r\n<li>Measurement range : 32.0℃~42.2℃</li>\r\n<li>Accuracy : ±0.2℃（35.0℃~42.0℃）; ±0.3℃（32.0℃~34.9℃ / 42.1℃~42.2℃）</li>\r\n<li>Voltage source : 2 x 1.5 V Batteries: size AAA</li>\r\n<li>Display : LCD/LED digital display</li>\r\n<li>Automatic power off : 60s</li>', NULL, 1, '<li>Non-touch measurement;</li>\r\n<li>High precision infrared sensor;</li>\r\n<li>Practical patent design</li>\r\n<li>High definition display</li>');
INSERT INTO `t_product` VALUES (2, '/AETR1D2.png', 'Infrared Thermometer ', 'AET-R1D2', '<li>Product Size : 40mm*44mm*164mm (L x W x H)</li>\r\n<li>Product Weight : 61g</li>\r\n<li>Memory : 32 groups</li>\r\n<li>Operating temp : 5°C~40°C</li>\r\n<li>Measuring mode : Forehead mode</li>\r\n<li>Measurement range : 32.0℃~42.2℃</li>\r\n<li>Accuracy : ±0.2℃（35.0℃~42.0℃）; ±0.3℃（32.0℃~34.9℃ /  42.1℃~42.2℃）</li>\r\n<li>Voltage source : 2 x 1.5 V Batteries: size AAA</li>\r\n<li>Display : LCD/LED digital display</li>\r\n<li>Automatic power off : 60s</li>', NULL, 1, '<li>Non-touch measurement;</li>\r\n<li>High precision infrared sensor;</li>\r\n<li>Practical patent design</li>\r\n<li>High definition display</li>');
INSERT INTO `t_product` VALUES (3, '/AETR1F11.png', 'Infrared Thermometer', 'AET-R1F1', '<li>Product Size : 37mm*16.3mm*150mm (L x W x H)</li>\r\n<li>Product Weight : 51g</li>\r\n<li>Memory : 32 groups</li>\r\n<li>Operating temp : 5°C~40°C</li>\r\n<li>Measuring mode : Forehead mode</li>\r\n<li>Measurement range : 32.0℃~42.2℃</li>\r\n<li>Accuracy : ±0.2℃（35.0℃~42.0℃）; ±0.3℃（32.0℃~34.9℃ / 42.1℃~42.2℃）</li>\r\n<li>Voltage source : 2 x 1.5 V Batteries: size AAA</li>\r\n<li>Display : LED digital display</li>\r\n<li>Automatic power off : 60s</li>', NULL, 1, '<li>No contact, safer</li>\r\n<li>Linear, one key measurement</li>\r\n<li>High precision resolution 0.1℃</li>');
INSERT INTO `t_product` VALUES (4, '/AETR1B11.png', 'Infrared Thermometer', 'AET-R1B1', '<li>Product Size : 37mm*78mm*144 mm (L x W x H)</li>\r\n<li>Product Weight : 62g</li>\r\n<li>Memory : 32 groups</li>\r\n<li>Operating temp : 5°C~40°C</li>\r\n<li>Measuring mode : Forehead mode</li>\r\n<li>Measurement range : 32.0℃~42.2℃</li>\r\n<li>Accuracy : ±0.2℃（35.0℃~42.0℃）; ±0.3℃（32.0℃~34.9℃ /  42.1℃~42.2℃）</li>\r\n<li>Voltage source : 2 x 1.5 V Batteries: size AAA</li>\r\n<li>Display : LED digital display</li>\r\n<li>Automatic power off : 60s</li>', NULL, 1, '<li>Non-touch measurement;</li>\r\n<li>High precision infrared sensor;</li>\r\n<li>Practical patent design</li>\r\n<li>High definition display</li>');
INSERT INTO `t_product` VALUES (5, '/AETR731.png', 'Infrared Thermometer', 'AET-R731', '<li>Product Size : 37mm*78mm*144 mm (L x W x H)</li>\r\n<li>Product Weight : 62g</li>\r\n<li>Memory : 32 groups</li>\r\n<li>Operating temp : 5°C~40°C</li>\r\n<li>Measuring mode : Forehead mode</li>\r\n<li>Measurement range : 32.0℃~42.2℃</li>\r\n<li>Accuracy : ±0.2℃（35.0℃~42.0℃）; ±0.3℃（32.0℃~34.9℃ /  42.1℃~42.2℃）</li>\r\n<li>Voltage source : 2 x 1.5 V Batteries: size AAA</li>\r\n<li>Automatic power off : 60s</li>\r\n', NULL, 1, '<li>Non-touch measurement;</li>\r\n<li>High precision infrared sensor;</li>\r\n<li>Practical patent design</li>\r\n<li>High definition display</li>\r\n');

SET FOREIGN_KEY_CHECKS = 1;
