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

 Date: 19/07/2019 21:20:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_news_selectRecord
-- ----------------------------
DROP TABLE IF EXISTS `nkl_news_selectRecord`;
CREATE TABLE `nkl_news_selectRecord` (
  `news_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `news_isSelected` tinyint(1) NOT NULL,
  `news_solveTime` datetime NOT NULL,
  PRIMARY KEY (`manager_id`,`news_solveTime`),
  KEY `news_id` (`news_id`),
  CONSTRAINT `nkl_news_selectrecord_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `nkl_news_info` (`news_id`),
  CONSTRAINT `nkl_news_selectrecord_ibfk_2` FOREIGN KEY (`manager_id`) REFERENCES `nkl_managers_info` (`manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
