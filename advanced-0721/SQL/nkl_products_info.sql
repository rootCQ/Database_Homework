/*
 Navicat Premium Data Transfer

 Source Server         : NKL
 Source Server Type    : MySQL
 Source Server Version : 80016
 Source Host           : localhost:3306
 Source Schema         : nkl

 Target Server Type    : MySQL
 Target Server Version : 80016
 File Encoding         : 65001

 Date: 19/07/2019 21:20:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_products_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_products_info`;
CREATE TABLE `nkl_products_info` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_storage` int(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_products_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_products_info` VALUES (1, '南开风景明信片', 14.00, 50);
INSERT INTO `nkl_products_info` VALUES (2, '学位熊', 150.00, 100);
INSERT INTO `nkl_products_info` VALUES (3, '阳阳与亮亮', 110.00, 70);
INSERT INTO `nkl_products_info` VALUES (4, '校徽', 65.00, 450);
INSERT INTO `nkl_products_info` VALUES (5, '口红套装', 280.00, 120);
INSERT INTO `nkl_products_info` VALUES (6, '保温杯', 80.00, 70);
INSERT INTO `nkl_products_info` VALUES (7, '荷花木雕水水杯垫', 18.00, 30);
INSERT INTO `nkl_products_info` VALUES (8, '兔子玩偶', 115.00, 56);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
