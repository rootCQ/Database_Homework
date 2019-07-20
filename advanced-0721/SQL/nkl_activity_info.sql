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

 Date: 19/07/2019 21:19:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_activity_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_activity_info`;
CREATE TABLE `nkl_activity_info` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_info` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `activity_location` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `activity_beginDate` date NOT NULL,
  `activity_beginTime` time NOT NULL,
  `activity_endDate` date NOT NULL,
  `activity_endTime` time NOT NULL,
  `activity_hostDept` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
