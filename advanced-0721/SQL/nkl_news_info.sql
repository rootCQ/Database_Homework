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

 Date: 19/07/2019 21:20:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nkl_news_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_news_info`;
CREATE TABLE `nkl_news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `news_releaser` int(11) NOT NULL,
  `news_releaseTime` date NOT NULL,
  `news_link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `news_isSelected` tinyint(1) NOT NULL DEFAULT '0',
  `news_isSolved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`),
  KEY `news_releaser` (`news_releaser`),
  CONSTRAINT `nkl_news_info_ibfk_1` FOREIGN KEY (`news_releaser`) REFERENCES `nkl_managers_info` (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_news_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_news_info` VALUES (1, '【迎百年校庆】帕特里克·博尔顿教授做客“百年南开大讲坛', 1, '2019-07-13', 'http://news.nankai.edu.cn/ywsd/system/2019/07/13/030034433.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (2, '【迎百年校庆】迈克尔贝里爵士做客“百年南开大讲坛', 1, '2019-07-11', 'http://news.nankai.edu.cn/ywsd/system/2019/07/11/030034401.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (3, '南开大学建校100周年倒计时100天启动仪式南开获捐1.15亿元', 1, '2019-07-10', 'http://news.nankai.edu.cn/ywsd/system/2019/07/10/030034377.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (4, '南开大学与交通银行天津分行签署百年校庆活动合作协议', 1, '2019-07-10', 'http://news.nankai.edu.cn/ywsd/system/2019/07/10/030034371.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (5, '南开大学“界面新闻天津频道”全霸屏', 1, '2019-07-10', 'http://news.nankai.edu.cn/ywsd/system/2019/07/10/030034373.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (6, '南开大学重庆校友会2018年年会暨首届渝州论坛举行', 1, '2019-01-21', 'http://news.nankai.edu.cn/ywsd/system/2019/01/21/000430474.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (7, '我校与今晚报联合主办“南开大学100年”征文今启动', 1, '2019-01-18', 'http://news.nankai.edu.cn/ywsd/system/2019/01/18/000429714.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (8, '南开北京校友会2018年年会举行', 1, '2019-01-08', 'http://news.nankai.edu.cn/ywsd/system/2019/01/18/000429635.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (9, '南开海南校友会2018年会暨庆祝南开大学建校100周年新春联谊会召开', 1, '2019-01-15', 'http://news.nankai.edu.cn/ywsd/system/2019/01/15/000428974.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (10, '黄友义教授做客“百年南开大讲坛”', 1, '2019-01-15', 'http://news.nankai.edu.cn/ywsd/system/2019/01/15/000428995.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (11, '第七届药学领域国家重点实验室发展与交流学术年会南开举行', 1, '2019-01-12', 'http://news.nankai.edu.cn/ywsd/system/2019/01/12/000428695.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (12, '中国科学院外籍院士王中林做客“百年南开大讲坛”', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428515.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (13, '南开大学获三位校友匿名捐款1.72亿元', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428494.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (14, '倒计时300天 校庆吉祥物、“南开百年艺术日历”首亮相', 1, '2018-12-22', 'http://news.nankai.edu.cn/ywsd/system/2018/12/22/000424834.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (15, '【我与南开的故事】群星璀璨 南开先生', 1, '2019-02-28', 'http://news.nankai.edu.cn/ywsd/system/2019/02/28/000434835.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (16, '南开北京校友会2018年年会举行', 1, '2019-01-08', 'http://news.nankai.edu.cn/ywsd/system/2019/01/18/000429635.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (17, '南开海南校友会2018年会暨庆祝南开大学建校100周年新春联谊会召开', 1, '2019-01-15', 'http://news.nankai.edu.cn/ywsd/system/2019/01/15/000428974.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (18, '黄友义教授做客“百年南开大讲坛”', 1, '2019-01-15', 'http://news.nankai.edu.cn/ywsd/system/2019/01/15/000428995.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (19, '第七届药学领域国家重点实验室发展与交流学术年会南开举行', 1, '2019-01-12', 'http://news.nankai.edu.cn/ywsd/system/2019/01/12/000428695.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (20, '中国科学院外籍院士王中林做客“百年南开大讲坛”', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428515.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (21, '南开大学获三位校友匿名捐款1.72亿元', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428494.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (22, '倒计时300天 校庆吉祥物、“南开百年艺术日历”首亮相', 1, '2018-12-22', 'http://news.nankai.edu.cn/ywsd/system/2018/12/22/000424834.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (23, '【我与南开的故事】群星璀璨 南开先生', 1, '2019-02-28', 'http://news.nankai.edu.cn/ywsd/system/2019/02/28/000434835.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (24, '【南开大学100年】张伯苓校长的“爱国三问”', 1, '2019-02-25', 'http://news.nankai.edu.cn/ywsd/system/2019/02/25/000434354.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (25, '【我和南开的故事】我有一段情', 1, '2019-03-27', 'http://news.nankai.edu.cn/ywsd/system/2019/03/25/000439614.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (26, '南开大学图书馆展出馆藏严范孙、张伯苓手札', 1, '2019-04-24', 'http://news.nankai.edu.cn/ywsd/system/2019/04/24/000446754.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (27, '首届南开全球校友马拉松赛举行', 1, '2019-04-21', 'http://news.nankai.edu.cn/ywsd/system/2019/04/21/000446254.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (28, '马志明院士做客“百年南开大讲坛”', 1, '2019-06-01', 'http://news.nankai.edu.cn/ywsd/system/2019/06/06/030033883.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (29, '“南开百年周恩来大讲堂”新获捐5000万元', 1, '2019-07-09', 'http://news.nankai.edu.cn/ywsd/system/2019/07/09/030034368.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (30, '南开大学建校100周年倒计时100天启动仪式举行', 1, '2019-07-09', 'http://news.nankai.edu.cn/ywsd/system/2019/07/09/030034367.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (31, '【迎百年校庆】多伦·奥巴赫教授做客“百年南开大讲坛”', 1, '2019-07-03', 'http://news.nankai.edu.cn/ywsd/system/2019/07/07/030034270.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (32, '南开洛杉矶校友会举行庆祝南开大学建校100周年大会', 1, '2019-06-26', 'http://news.nankai.edu.cn/ywsd/system/2019/07/04/030034234.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (33, '南开大学复建三栋历史建筑主体完工', 1, '2018-12-18', 'http://news.nankai.edu.cn/ywsd/system/2018/12/18/000424074.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (34, '南开大学建校100周年倒计时200天仪式举行', 1, '2019-03-31', 'http://news.nankai.edu.cn/ywsd/system/2019/03/31/000440797.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (35, '11位深圳校友向母校南开大学捐款1.8亿元', 1, '2019-03-31', 'http://news.nankai.edu.cn/ywsd/system/2019/03/31/000440734.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (36, '中国社科院辛向阳研究员做客“百年南开大讲坛”', 1, '2019-03-26', 'http://news.nankai.edu.cn/ywsd/system/2019/03/26/000439777.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (37, '梁其姿院士做客“百年南开大讲坛”', 1, '2019-03-25', 'http://news.nankai.edu.cn/ywsd/system/2019/03/25/000439634.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (38, '周其林院士做客“百年南开大讲坛”', 1, '2019-03-24', 'http://news.nankai.edu.cn/ywsd/system/2019/03/24/000439534.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (39, '龚克为“南开大学习近平新时代中国特色社会主义思想大讲堂”做首讲', 1, '2019-03-23', 'http://news.nankai.edu.cn/ywsd/system/2019/03/23/000439514.shtml', 1, 0);
INSERT INTO `nkl_news_info` VALUES (40, '南开大学百年校庆公告（第一号）', 1, '2018-09-27', 'http://news.nankai.edu.cn/ywsd/system/2018/09/27/000411474.shtml', 1, 0);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
