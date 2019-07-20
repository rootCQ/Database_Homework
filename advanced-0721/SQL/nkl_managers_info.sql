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

 Date: 19/07/2019 21:20:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_managers_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_managers_info`;
CREATE TABLE `nkl_managers_info` (
  `manager_id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `manager_sex` char(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `manager_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `manager_grade` int(11) NOT NULL,
  `manager_college` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `manager_major` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_managers_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_managers_info` VALUES (1, '周辰霏', '女', '1712991@mail.nankai.edu.cn', 2017, '南开大学', '计算机科学与技术');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
