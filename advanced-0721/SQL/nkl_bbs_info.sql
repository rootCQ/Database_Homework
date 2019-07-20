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

 Date: 19/07/2019 21:19:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_bbs_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_bbs_info`;
CREATE TABLE `nkl_bbs_info` (
  `bbs_id` int(11) NOT NULL AUTO_INCREMENT,
  `bbs_time` datetime NOT NULL,
  `bbs_userNickname` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bbs_userDescribe` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bbs_content` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `bbs_isSelected` tinyint(1) NOT NULL DEFAULT '0',
  `bbs_isSolved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bbs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
