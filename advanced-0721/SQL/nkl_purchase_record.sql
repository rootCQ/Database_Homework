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

 Date: 19/07/2019 21:20:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_purchase_record
-- ----------------------------
DROP TABLE IF EXISTS `nkl_purchase_record`;
CREATE TABLE `nkl_purchase_record` (
  `purchase_time` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`purchase_time`,`user_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `nkl_purchase_record_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `nkl_users_login` (`user_id`),
  CONSTRAINT `nkl_purchase_record_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `nkl_products_info` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
