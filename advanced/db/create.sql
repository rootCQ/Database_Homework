drop database if exists NKL;
create database NKL;
use NKL;
/*
 Navicat Premium Data Transfer

 Source Server         : NKL
 Source Server Type    : MySQL
 Source Server Version : 80016
 Source Host           : 192.168.64.1:3306
 Source Schema         : NKL

 Target Server Type    : MySQL
 Target Server Version : 80016
 File Encoding         : 65001

 Date: 22/07/2019 02:29:14 
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `nkl_managers_info`;
CREATE TABLE `nkl_managers_info` (
  `manager_id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `manager_sex` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `manager_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `manager_grade` int(11) NOT NULL,
  `manager_college` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `manager_major` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- ----------------------------
-- Records of nkl_managers_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_managers_info` VALUES (1, '周辰霏', '女', '1712991@mail.nankai.edu.cn', 2017, '计算机学院', '计算机科学与技术');
INSERT INTO `nkl_managers_info` VALUES (2, '乔静欣', '女', 'qjx@qjx.com', 2017, '网络空间安全学院', '信息安全');
INSERT INTO `nkl_managers_info` VALUES (3, '李伟', '男', 'lw@lw.com', 2017, '计算机学院', '计算机科学与技术');
INSERT INTO `nkl_managers_info` VALUES (4, '李力挺', '男', 'llt@llt.com', 2017, '计算机学院', '计算机科学与技术');
INSERT INTO `nkl_managers_info` VALUES (5, '朱心怡', '女', 'zxy@zxy.com', 2017, '网络空间安全学院', '信息安全');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

SET FOREIGN_KEY_CHECKS = 1;


DROP TABLE IF EXISTS `nkl_managers_login`;
CREATE TABLE `nkl_managers_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '账户',
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `mobile` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '手机号码（登录账号）',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '状态',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;


-- ----------------------------
-- Table structure for nkl_activity_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_activity_info`;
CREATE TABLE `nkl_activity_info` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `activity_location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `activity_beginDate` date NOT NULL,
  `activity_beginTime` time DEFAULT NULL,
  `activity_endDate` date NOT NULL,
  `activity_endTime` time DEFAULT NULL,
  `activity_hostDept` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_activity_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_activity_info` VALUES (1, '南开大学“校长杯”互联网+大学生创新创业大赛启动会', '全校', '2019-03-29', NULL, '2019-03-29', NULL, '团委');
INSERT INTO `nkl_activity_info` VALUES (2, '百年南开植物生物学名家论坛', '八里台校区生物站报告厅', '2019-04-20', NULL, '2019-04-20', NULL, '生命科学学院');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

DROP TABLE IF EXISTS `nkl_bbs_info`;
CREATE TABLE `nkl_bbs_info` (
  `bbs_id` int(11) NOT NULL AUTO_INCREMENT,
  `bbs_time` timestamp NOT NULL,
  `bbs_userNickname` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bbs_userDescribe` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bbs_content` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bbs_isSelected` tinyint(1) NOT NULL DEFAULT '0',
  `bbs_isSolved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bbs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_bbs_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_bbs_info` VALUES (1, '2019-07-20 18:22:00', '赵明', '哲学系83级', '祝南开早日成为世界一流大学，完成张伯苓老校长的夙愿！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (2, '2019-07-20 18:22:38', '邓承浩', '2009级商学院旅游管理校友', '南开百年华诞将至，历百载愈淬公能初心，新时代更彰日新月异，祝愿母校永远年轻！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (3, '2019-07-20 18:23:19', '陈静雯', '17级 国际关系专业格拉斯哥班', '白河之滨，汇聚四海英才。南以开拓，公能传承百年。同祝华诞，迎日新月异。', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (4, '2019-07-21 01:46:16', '南开大学第二十届研究生支教团', '南开大学第二十届研究生支教团', '二十载扎根西部，于三尺讲台书青春华章；  一百年壮怀难折，为泱泱中华筑公能学府。  中兴业，当吾辈！巍巍南开，月异日新！', 0, 1);
INSERT INTO `nkl_bbs_info` VALUES (5, '2019-07-21 22:16:10', '2017年经济管理贵州南开校友会', '2017年经济管理贵州南开校友会', '希望母校越来越好', 0, 0);
COMMIT;


SET FOREIGN_KEY_CHECKS = 1;
DROP TABLE IF EXISTS `nkl_bbs_selectRecord`;
CREATE TABLE `nkl_bbs_selectRecord` (
  `manger_id` int(11) NOT NULL,
  `bbs_isSelected` tinyint(1) NOT NULL,
  `bbs_solveTime` datetime NOT NULL,
  `bbs_id` int(11) NOT NULL,
  PRIMARY KEY (`manger_id`,`bbs_solveTime`) USING BTREE,
  KEY `bbs_id` (`bbs_id`),
  CONSTRAINT `nkl_bbs_selectrecord_ibfk_2` FOREIGN KEY (`bbs_id`) REFERENCES `nkl_bbs_info` (`bbs_id`),
  CONSTRAINT `nkl_bbs_selectrecord_ibfk_3` FOREIGN KEY (`manger_id`) REFERENCES `nkl_managers_info` (`manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_bbs_selectRecord
-- ----------------------------
BEGIN;
INSERT INTO `nkl_bbs_selectRecord` VALUES (1, 0, '2019-07-21 00:00:00', 4);
COMMIT;

-- ----------------------------
-- Triggers structure for table nkl_bbs_selectRecord
-- ----------------------------
DROP TRIGGER IF EXISTS `tg_bbs_isSolved`;
delimiter ;;
CREATE TRIGGER `tg_bbs_isSolved` AFTER INSERT ON `nkl_bbs_selectRecord` FOR EACH ROW begin
update nkl_bbs_info set bbs_isSolved=1 where nkl_bbs_info.bbs_id = new.bbs_id;
update nkl_bbs_info set bbs_isSelected=new.bbs_isSelected where nkl_bbs_info.bbs_id = new.bbs_id;
end
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
DROP TABLE IF EXISTS `nkl_history_info`;
CREATE TABLE `nkl_history_info` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `history_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `history_passage` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;


DROP TABLE IF EXISTS `nkl_news_info`;
CREATE TABLE `nkl_news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `news_releaser` int(11) NOT NULL,
  `news_releaseTime` date NOT NULL,
  `news_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`news_id`),
  KEY `news_releaser` (`news_releaser`),
  CONSTRAINT `nkl_news_info_ibfk_1` FOREIGN KEY (`news_releaser`) REFERENCES `nkl_managers_info` (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_news_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_news_info` VALUES (1, '【迎百年校庆】帕特里克·博尔顿教授做客“百年南开大讲坛', 1, '2019-07-13', 'http://news.nankai.edu.cn/ywsd/system/2019/07/13/030034433.shtml');
INSERT INTO `nkl_news_info` VALUES (2, '【迎百年校庆】迈克尔贝里爵士做客“百年南开大讲坛', 1, '2019-07-11', 'http://news.nankai.edu.cn/ywsd/system/2019/07/11/030034401.shtml');
INSERT INTO `nkl_news_info` VALUES (3, '南开大学建校100周年倒计时100天启动仪式南开获捐1.15亿元', 1, '2019-07-10', 'http://news.nankai.edu.cn/ywsd/system/2019/07/10/030034377.shtml');
INSERT INTO `nkl_news_info` VALUES (4, '南开大学与交通银行天津分行签署百年校庆活动合作协议', 1, '2019-07-10', 'http://news.nankai.edu.cn/ywsd/system/2019/07/10/030034371.shtml');
INSERT INTO `nkl_news_info` VALUES (5, '南开大学“界面新闻天津频道”全霸屏', 1, '2019-07-10', 'http://news.nankai.edu.cn/ywsd/system/2019/07/10/030034373.shtml');
INSERT INTO `nkl_news_info` VALUES (6, '南开大学重庆校友会2018年年会暨首届渝州论坛举行', 1, '2019-01-21', 'http://news.nankai.edu.cn/ywsd/system/2019/01/21/000430474.shtml');
INSERT INTO `nkl_news_info` VALUES (7, '我校与今晚报联合主办“南开大学100年”征文今启动', 1, '2019-01-18', 'http://news.nankai.edu.cn/ywsd/system/2019/01/18/000429714.shtml');
INSERT INTO `nkl_news_info` VALUES (13, '南开大学获三位校友匿名捐款1.72亿元', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428494.shtml');
INSERT INTO `nkl_news_info` VALUES (15, '【我与南开的故事】群星璀璨 南开先生', 1, '2019-02-28', 'http://news.nankai.edu.cn/ywsd/system/2019/02/28/000434835.shtml');
INSERT INTO `nkl_news_info` VALUES (16, '南开北京校友会2018年年会举行', 1, '2019-01-08', 'http://news.nankai.edu.cn/ywsd/system/2019/01/18/000429635.shtml');
INSERT INTO `nkl_news_info` VALUES (17, '南开海南校友会2018年会暨庆祝南开大学建校100周年新春联谊会召开', 1, '2019-01-15', 'http://news.nankai.edu.cn/ywsd/system/2019/01/15/000428974.shtml');
INSERT INTO `nkl_news_info` VALUES (18, '黄友义教授做客“百年南开大讲坛”', 1, '2019-01-15', 'http://news.nankai.edu.cn/ywsd/system/2019/01/15/000428995.shtml');
INSERT INTO `nkl_news_info` VALUES (19, '第七届药学领域国家重点实验室发展与交流学术年会南开举行', 1, '2019-01-12', 'http://news.nankai.edu.cn/ywsd/system/2019/01/12/000428695.shtml');
INSERT INTO `nkl_news_info` VALUES (20, '中国科学院外籍院士王中林做客“百年南开大讲坛”', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428515.shtml');
INSERT INTO `nkl_news_info` VALUES (21, '南开大学获三位校友匿名捐款1.72亿元', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428494.shtml');
INSERT INTO `nkl_news_info` VALUES (22, '倒计时300天 校庆吉祥物、“南开百年艺术日历”首亮相', 1, '2018-12-22', 'http://news.nankai.edu.cn/ywsd/system/2018/12/22/000424834.shtml');
INSERT INTO `nkl_news_info` VALUES (24, '【南开大学100年】张伯苓校长的“爱国三问”', 1, '2019-02-25', 'http://news.nankai.edu.cn/ywsd/system/2019/02/25/000434354.shtml');
INSERT INTO `nkl_news_info` VALUES (25, '【我和南开的故事】我有一段情', 1, '2019-03-27', 'http://news.nankai.edu.cn/ywsd/system/2019/03/25/000439614.shtml');
INSERT INTO `nkl_news_info` VALUES (26, '南开大学图书馆展出馆藏严范孙、张伯苓手札', 1, '2019-04-24', 'http://news.nankai.edu.cn/ywsd/system/2019/04/24/000446754.shtml');
INSERT INTO `nkl_news_info` VALUES (27, '首届南开全球校友马拉松赛举行', 1, '2019-04-21', 'http://news.nankai.edu.cn/ywsd/system/2019/04/21/000446254.shtml');
INSERT INTO `nkl_news_info` VALUES (28, '马志明院士做客“百年南开大讲坛”', 1, '2019-06-01', 'http://news.nankai.edu.cn/ywsd/system/2019/06/06/030033883.shtml');
INSERT INTO `nkl_news_info` VALUES (29, '“南开百年周恩来大讲堂”新获捐5000万元', 1, '2019-07-09', 'http://news.nankai.edu.cn/ywsd/system/2019/07/09/030034368.shtml');
INSERT INTO `nkl_news_info` VALUES (30, '南开大学建校100周年倒计时100天启动仪式举行', 1, '2019-07-09', 'http://news.nankai.edu.cn/ywsd/system/2019/07/09/030034367.shtml');
INSERT INTO `nkl_news_info` VALUES (31, '【迎百年校庆】多伦·奥巴赫教授做客“百年南开大讲坛”', 1, '2019-07-03', 'http://news.nankai.edu.cn/ywsd/system/2019/07/07/030034270.shtml');
INSERT INTO `nkl_news_info` VALUES (32, '南开洛杉矶校友会举行庆祝南开大学建校100周年大会', 1, '2019-06-26', 'http://news.nankai.edu.cn/ywsd/system/2019/07/04/030034234.shtml');
INSERT INTO `nkl_news_info` VALUES (33, '南开大学复建三栋历史建筑主体完工', 1, '2018-12-18', 'http://news.nankai.edu.cn/ywsd/system/2018/12/18/000424074.shtml');
INSERT INTO `nkl_news_info` VALUES (34, '南开大学建校100周年倒计时200天仪式举行', 1, '2019-03-31', 'http://news.nankai.edu.cn/ywsd/system/2019/03/31/000440797.shtml');
INSERT INTO `nkl_news_info` VALUES (35, '11位深圳校友向母校南开大学捐款1.8亿元', 1, '2019-03-31', 'http://news.nankai.edu.cn/ywsd/system/2019/03/31/000440734.shtml');
INSERT INTO `nkl_news_info` VALUES (36, '中国社科院辛向阳研究员做客“百年南开大讲坛”', 1, '2019-03-26', 'http://news.nankai.edu.cn/ywsd/system/2019/03/26/000439777.shtml');
INSERT INTO `nkl_news_info` VALUES (37, '梁其姿院士做客“百年南开大讲坛”', 1, '2019-03-25', 'http://news.nankai.edu.cn/ywsd/system/2019/03/25/000439634.shtml');
INSERT INTO `nkl_news_info` VALUES (38, '周其林院士做客“百年南开大讲坛”', 1, '2019-03-24', 'http://news.nankai.edu.cn/ywsd/system/2019/03/24/000439534.shtml');
INSERT INTO `nkl_news_info` VALUES (39, '龚克为“南开大学习近平新时代中国特色社会主义思想大讲堂”做首讲', 1, '2019-03-23', 'http://news.nankai.edu.cn/ywsd/system/2019/03/23/000439514.shtml');
INSERT INTO `nkl_news_info` VALUES (40, '南开大学百年校庆公告（第一号）', 1, '2018-09-27', 'http://news.nankai.edu.cn/ywsd/system/2018/09/27/000411474.shtml');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

DROP TABLE IF EXISTS `nkl_products_info`;
CREATE TABLE `nkl_products_info` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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

DROP TABLE IF EXISTS `nkl_users_login`;
CREATE TABLE `nkl_users_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_auth_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;

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


