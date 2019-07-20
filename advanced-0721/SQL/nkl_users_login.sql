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

 Date: 19/07/2019 21:21:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_users_login
-- ----------------------------
DROP TABLE IF EXISTS `nkl_users_login`;
CREATE TABLE `nkl_users_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password_hash` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_auth_key` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
