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

 Date: 19/07/2019 21:19:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_bbs_selectRecord
-- ----------------------------
DROP TABLE IF EXISTS `nkl_bbs_selectRecord`;
CREATE TABLE `nkl_bbs_selectRecord` (
  `manager_id` int(11) NOT NULL,
  `bbs_isSelected` tinyint(1) NOT NULL,
  `bbs_solveTime` datetime NOT NULL,
  `bbs_id` int(11) NOT NULL,
  PRIMARY KEY (`manager_id`,`bbs_solveTime`),
  KEY `bbs_id` (`bbs_id`),
  CONSTRAINT `nkl_bbs_selectrecord_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `nkl_managers_info` (`manager_id`),
  CONSTRAINT `nkl_bbs_selectrecord_ibfk_2` FOREIGN KEY (`bbs_id`) REFERENCES `nkl_bbs_info` (`bbs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
