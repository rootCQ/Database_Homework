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

 Date: 19/07/2019 21:20:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_history_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_history_info`;
CREATE TABLE `nkl_history_info` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `history_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `history_passage` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
