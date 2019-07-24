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

 Date: 24/07/2019 23:30:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_activity_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_activity_info` VALUES (1, '南开大学“校长杯”互联网+大学生创新创业大赛启动会', '全校', '2019-03-29', NULL, '2019-03-29', NULL, '团委');
INSERT INTO `nkl_activity_info` VALUES (2, '百年南开植物生物学名家论坛', '八里台校区生物站报告厅', '2019-04-20', NULL, '2019-04-20', NULL, '生命科学学院');
INSERT INTO `nkl_activity_info` VALUES (3, '大学英语有效教学研讨会', '八里台省身楼二楼报告厅', '2019-05-11', NULL, '2019-05-11', NULL, '外国语学院公共英语教学部');
COMMIT;

-- ----------------------------
-- Table structure for nkl_bbs_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_bbs_info`;
CREATE TABLE `nkl_bbs_info` (
  `bbs_id` int(11) NOT NULL AUTO_INCREMENT,
  `bbs_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bbs_userNickname` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bbs_userDescribe` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bbs_content` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bbs_isSelected` tinyint(1) NOT NULL DEFAULT '0',
  `bbs_isSolved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bbs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_bbs_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_bbs_info` VALUES (1, '2019-07-21 02:22:00', '赵明', '哲学系83级', '祝南开早日成为世界一流大学，完成张伯苓老校长的夙愿！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (2, '2019-07-24 17:01:43', '朱心怡', '2017', '小开生日快乐！！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (3, '2019-07-24 17:01:47', '李伟', '2017', '快乐！！！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (4, '2019-07-24 01:27:33', '南开大学第二十届研究生支教团', '南开大学第二十届研究生支教团', '二十载扎根西部，于三尺讲台书青春华章；  一百年壮怀难折，为泱泱中华筑公能学府。', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (5, '2019-07-24 17:01:49', '乔静欣', '2017', '百年快乐', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (6, '2019-07-24 01:28:19', '周辰霏', '17计科', '祝南开百岁华诞快乐，日后更上一层楼，我愿以光大南开为己任', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (7, '2019-07-24 12:59:12', '李力铤', '2017', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (8, '2019-07-24 01:42:10', '周辰霏', '17计算机', '<img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/f6/2018new_aini_org.png\" height=\"22\" width=\"22\" />我爱南开100年！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (9, '2019-07-24 13:00:13', '朱心怡', '2017', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (10, '2019-07-24 13:00:18', '乔静欣', '2017', '百年快乐', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (11, '2019-07-24 12:59:12', '李力铤', '2017', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (12, '2019-07-24 12:59:12', '李力铤', '2017', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (13, '2019-07-15 13:35:18', '李伟', '2003', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (14, '2019-07-15 13:35:18', '李伟', '2003', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (15, '2019-07-24 12:59:17', '周辰霏', '2017', '百年快乐', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (16, '2019-07-09 13:00:13', '朱心怡', '2017', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (17, '2019-07-24 13:00:18', '乔静欣', '2017', '百年快乐', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (18, '2019-07-24 12:59:17', '周辰霏', '2017', '百年快乐', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (19, '2019-07-26 12:59:12', '李力铤', '2017', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (20, '2019-07-24 13:16:19', '吃瓜群众', '2018', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (21, '2019-07-24 13:16:19', '吃瓜群众', '2018', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (22, '2019-07-24 13:16:19', '吃瓜群众', '2018', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (23, '2019-07-24 13:16:19', '吃瓜群众', '2018', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (24, '2019-07-24 13:16:19', '吃瓜群众', '2018', '百年快乐！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (25, '2019-07-24 13:00:18', '乔静欣', '2017', '百年快乐', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (26, '2019-07-24 15:36:55', '贵州校友会', '2017年经济管理贵州南开校友会', '希望母校越来越好', 0, 1);
INSERT INTO `nkl_bbs_info` VALUES (27, '2019-07-24 14:09:16', '李云', '2018', '百年快乐', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (28, '2019-07-24 14:21:16', '李力铤', '2017', '100快乐！！！！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (32, '2019-07-24 16:56:50', '邓承浩', '2009级商学院旅游管理校友', '南开百年华诞将至，历百载愈淬公能初心，新时代更彰日新月异，祝愿母校永远年轻！', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (33, '2019-07-24 16:56:52', '陈静雯', '17级 国际关系专业格拉斯哥班', '白河之滨，汇聚四海英才。南以开拓，公能传承百年。同祝华诞，迎日新月异。', 1, 1);
INSERT INTO `nkl_bbs_info` VALUES (34, '2019-07-24 16:57:45', '2017年经济管理贵州南开校友会', '2017年经济管理贵州南开校友会', '希望母校越来越好', 1, 1);
COMMIT;

-- ----------------------------
-- Table structure for nkl_bbs_selectRecord
-- ----------------------------
DROP TABLE IF EXISTS `nkl_bbs_selectRecord`;
CREATE TABLE `nkl_bbs_selectRecord` (
  `manager_id` int(11) NOT NULL,
  `bbs_isSelected` tinyint(1) NOT NULL,
  `bbs_solveTime` datetime NOT NULL,
  `bbs_id` int(11) NOT NULL,
  PRIMARY KEY (`manager_id`,`bbs_solveTime`) USING BTREE,
  KEY `bbs_id` (`bbs_id`),
  CONSTRAINT `nkl_bbs_selectrecord_ibfk_2` FOREIGN KEY (`bbs_id`) REFERENCES `nkl_bbs_info` (`bbs_id`),
  CONSTRAINT `nkl_bbs_selectrecord_ibfk_3` FOREIGN KEY (`manager_id`) REFERENCES `nkl_managers_info` (`manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_bbs_selectRecord
-- ----------------------------
BEGIN;
INSERT INTO `nkl_bbs_selectRecord` VALUES (1, 0, '2019-07-21 00:00:00', 4);
INSERT INTO `nkl_bbs_selectRecord` VALUES (1, 0, '2019-07-24 00:00:00', 26);
COMMIT;

-- ----------------------------
-- Table structure for nkl_history_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_history_info`;
CREATE TABLE `nkl_history_info` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `history_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `history_passage` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_history_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_history_info` VALUES (1, '始于1919', '自创建以来，南开大学历经坎坷。<br />\r\n建立之初，只是一所规模很小的私立学校.<br />\r\n在多方努力下，得到了很大的发展。<br />\r\n日军蹂躏中华，南开热血儿纷纷投入抗日运动。<br />\r\n1937年7月，天津沦陷，南开大学被日军炸毁。<br />\r\n流亡南迁后，与北大、清华成立为西南联大。<br />\r\n从1937年至1946年，西南联大最后结束。<br />\r\n1946年，南开复员之后遂改立为国立大学。<br />\r\n复员之后，南开园得以重建。<br />');
INSERT INTO `nkl_history_info` VALUES (2, '水田风光', '三十年代初，南开大学是有名的风景游览区。<br />\r\n当时，诗人柳亚子在南开大学赋诗称道：<br />\r\n汽车飞驶抵南开，水影林光互抱怀。<br />\r\n此是桃源仙境界，已同浊世隔尘埃。 <br />\r\n“水”是南开大学校园的一大特色。<br />\r\n整个学校被支河细流所环绕,有水田风光。<br />\r\n校内小溪纵横交错，南北通达。<br />');
INSERT INTO `nkl_history_info` VALUES (3, '私立时期', '南开大学孕育于新文化运动，诞生于五四运动。<br />\r\n在北洋军阀的黑暗统治下，教育得不到重视。<br />\r\n在其成立的最初几年，是最艰难的一个时期。<br />\r\n在建立初期，南开大学就开时代先声，<br />\r\n实行男女同校，这在北方私立大学中为第一家。<br />\r\n1928年，学校提出以“土货化”为今后发展的根本方针。<br />\r\n这是南开教育的重大进步，也是其发展到新阶段的标志。<br />');
INSERT INTO `nkl_history_info` VALUES (4, '西南联大', '华北事变后，形势日趋紧张。日军向天津进攻。<br />\r\n7月30日凌晨一点，日军开始向南开大学开炮。<br />\r\n南开大学校园遭受了日军侵略者八年的蹂躏。<br />\r\n南开被毁，是抗战中全国首个罹难的高等学府。<br />\r\n财产损失占高校全部战争损失的十分之一。<br />\r\n南开为中国而牺牲，有中国即有南开！<br />\r\n1937年南开大学与清北共同成立长沙临时大学。<br />\r\n1938年国立长沙临时大学改称西南联合大学。<br />');
INSERT INTO `nkl_history_info` VALUES (5, '百年积淀，再创辉煌', '南开大学是国家教育部直属重点综合性大学，<br />\r\n是敬爱的周恩来总理的母校。<br />\r\n被誉为“学府北辰”。<br />\r\n是国内学科齐全的综合性、研究型大学之一。<br />\r\n南开大学坚持“允公允能，日新月异”的校训，<br />\r\n形成了文理并重、基础宽厚、<br />\r\n突出应用与创新的办学特色。<br />\r\n2019年，南开大学将迎来建校百年。<br />\r\n南开大学将继续为建设南开品格、<br />\r\n中国特色、世界一流大学而努力奋斗！<br />');
COMMIT;

-- ----------------------------
-- Table structure for nkl_managers_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_managers_info`;
CREATE TABLE `nkl_managers_info` (
  `manager_id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `manager_sex` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `manager_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `manager_stuNum` int(11) NOT NULL,
  `manager_college` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `manager_major` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_managers_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_managers_info` VALUES (1, '周辰霏', '女', 'zcf@nkl.com', 1712991, '计算机学院', '计算机科学与技术');
INSERT INTO `nkl_managers_info` VALUES (2, '乔静欣', '女', 'qjx@nkl.com', 1711295, '网络空间安全学院', '信息安全');
INSERT INTO `nkl_managers_info` VALUES (3, '李伟', '男', 'lw@nkl.com', 1711350, '计算机学院', '计算机科学与技术');
INSERT INTO `nkl_managers_info` VALUES (4, '李力挺', '男', 'llt@nkl.com', 1711345, '计算机学院', '计算机科学与技术');
INSERT INTO `nkl_managers_info` VALUES (5, '朱心怡', '女', 'zxy@nkl.com', 1711304, '网络空间安全学院', '信息安全');
COMMIT;

-- ----------------------------
-- Table structure for nkl_news_info
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
INSERT INTO `nkl_news_info` VALUES (41, '【南开百年周恩来纪念讲堂】一家南开人 一生南开情', 1, '2019-07-24', 'http://news.nankai.edu.cn/ywsd/system/2019/05/31/030033648.shtml');
COMMIT;

-- ----------------------------
-- Table structure for nkl_products_info
-- ----------------------------
DROP TABLE IF EXISTS `nkl_products_info`;
CREATE TABLE `nkl_products_info` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_storage` int(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_products_info
-- ----------------------------
BEGIN;
INSERT INTO `nkl_products_info` VALUES (1, '南开风景明信片', 14.00, 31);
INSERT INTO `nkl_products_info` VALUES (2, '学位熊', 150.00, 40);
INSERT INTO `nkl_products_info` VALUES (3, '阳阳与亮亮', 110.00, 41);
INSERT INTO `nkl_products_info` VALUES (4, '校徽', 65.00, 41);
INSERT INTO `nkl_products_info` VALUES (5, '口红套装', 280.00, 41);
INSERT INTO `nkl_products_info` VALUES (6, '保温杯', 80.00, 41);
INSERT INTO `nkl_products_info` VALUES (7, '荷花木雕水杯垫', 18.00, 42);
INSERT INTO `nkl_products_info` VALUES (8, '兔子玩偶', 115.00, 42);
COMMIT;

-- ----------------------------
-- Table structure for nkl_purchase_record
-- ----------------------------
DROP TABLE IF EXISTS `nkl_purchase_record`;
CREATE TABLE `nkl_purchase_record` (
  `user_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_purchase_record
-- ----------------------------
BEGIN;
INSERT INTO `nkl_purchase_record` VALUES ('finally', 1711200, '2019-07-23 15:49:43');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 1711202, '2019-07-23 04:06:32');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 1711202, '2019-07-23 04:06:45');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 1, '2019-07-23 16:09:25');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 2, '2019-07-23 16:24:45');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 2, '2019-07-23 16:39:18');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 2, '2019-07-23 16:39:25');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 3, '2019-07-23 16:42:03');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 3, '2019-07-23 16:43:00');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 3, '2019-07-23 16:43:41');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 3, '2019-07-23 16:44:00');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 3, '2019-07-23 16:44:04');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 2, '2019-07-23 16:44:49');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 2, '2019-07-23 16:44:57');
INSERT INTO `nkl_purchase_record` VALUES ('rudolph', 2, '2019-07-23 17:03:49');
INSERT INTO `nkl_purchase_record` VALUES ('rudolph', 1, '2019-07-23 17:03:59');
INSERT INTO `nkl_purchase_record` VALUES ('rudolph', 1, '2019-07-23 17:04:09');
INSERT INTO `nkl_purchase_record` VALUES ('rudolph', 2, '2019-07-23 17:47:06');
INSERT INTO `nkl_purchase_record` VALUES ('finally', 1, '2019-07-24 04:13:27');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 10:17:08');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 10:18:03');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 10:24:56');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 10:27:07');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 2, '2019-07-24 10:32:26');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 2, '2019-07-24 10:43:25');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 2, '2019-07-24 11:51:43');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 2, '2019-07-24 11:51:48');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 12:15:27');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 2, '2019-07-24 12:50:58');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 13:34:33');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 13:35:37');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 13:36:11');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 13:36:24');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 13:36:49');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 13:37:10');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 13:37:18');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 13:39:18');
INSERT INTO `nkl_purchase_record` VALUES ('zcf', 1, '2019-07-24 14:09:08');
INSERT INTO `nkl_purchase_record` VALUES ('zcf1', 1, '2019-07-24 17:26:29');
INSERT INTO `nkl_purchase_record` VALUES ('zcf1', 2, '2019-07-24 17:26:37');
INSERT INTO `nkl_purchase_record` VALUES ('zcf1', 3, '2019-07-24 17:26:45');
INSERT INTO `nkl_purchase_record` VALUES ('zcf1', 4, '2019-07-24 17:26:53');
INSERT INTO `nkl_purchase_record` VALUES ('zcf1', 5, '2019-07-24 17:27:01');
INSERT INTO `nkl_purchase_record` VALUES ('zcf1', 6, '2019-07-24 17:27:09');
COMMIT;

-- ----------------------------
-- Table structure for nkl_user_login
-- ----------------------------
DROP TABLE IF EXISTS `nkl_user_login`;
CREATE TABLE `nkl_user_login` (
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `loginip` bigint(20) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nkl_user_login
-- ----------------------------
BEGIN;
INSERT INTO `nkl_user_login` VALUES ('8888', '21218cca77804d2ba1922c33e0151105', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('daisyy', 'root', 1563848546, 2130706433);
INSERT INTO `nkl_user_login` VALUES ('finally', 'e10adc3949ba59abbe56e057f20f883e', 1563941539, 2130706433);
INSERT INTO `nkl_user_login` VALUES ('finally1', 'e10adc3949ba59abbe56e057f20f883e', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('finally724', 'e10adc3949ba59abbe56e057f20f883e', 1563901263, 2130706433);
INSERT INTO `nkl_user_login` VALUES ('inaank', 'root', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('liliting', 'e10adc3949ba59abbe56e057f20f883e', 1563904205, 2130706433);
INSERT INTO `nkl_user_login` VALUES ('liliting2', 'e10adc3949ba59abbe56e057f20f883e', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('littledaisy', 'e10adc3949ba59abbe56e057f20f883e', 1563850715, 2130706433);
INSERT INTO `nkl_user_login` VALUES ('littledaisy1', 'root', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('littledaisy2', 'root', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('littledaisy3', 'root', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('littledaisy4', 'root', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('root111', 'root', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('root444', 'root', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('root55', 'root', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('root56', 'e10adc3949ba59abbe56e057f20f883e', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('rudolph', 'e10adc3949ba59abbe56e057f20f883e', 1563901419, 2130706433);
INSERT INTO `nkl_user_login` VALUES ('succeed', 'root', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('yanzheng', 'e10adc3949ba59abbe56e057f20f883e', 0, 0);
INSERT INTO `nkl_user_login` VALUES ('zcf', 'e10adc3949ba59abbe56e057f20f883e', 1563970140, 2130706433);
INSERT INTO `nkl_user_login` VALUES ('zcf1', 'c33367701511b4f6020ec61ded352059', 1563981966, 2130706433);
INSERT INTO `nkl_user_login` VALUES ('zhuce', 'root', 0, 0);
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (2, 'Claire', 'JYQaRH8X4YOvhHui8quKfKuPUudrxigb', '$2y$13$lX3hTS24UXQqP4hfSpTWfu6OnnraxjhKPlTMU7lfX.X/wEZKFpthu', NULL, '546707347@qq.com', 10, 1563368518, 1563368518, 'J_uPbKUrteluzUN7ZhjNttPyJbaxDWQG_1563368518');
INSERT INTO `user` VALUES (3, 'Liyu', 's8BtkIR1GaqUyTTt-ucM_O4_jl_VQziP', '$2y$13$SrxcwsfmjhUvwaO9x7wqD.GG4pgPY9xDJprM8rw1om4EfrqKdUvAC', NULL, 'liyu@liyu.com', 10, 1563789330, 1563789330, 'IRbwTOxgw17xz0-LETJ7sttwQibUFfyR_1563789330');
INSERT INTO `user` VALUES (4, 'zcf', 'reX69CvdubkEHg2Rv8lTCpIj7gsNWNGy', '$2y$13$soBK5b1idgdILS2ZagaGE.rqMvWQtNaaJ.MkCC4Rr6LZv/FprJLGW', NULL, 'tiffanychou21@163.com', 10, 1563879941, 1563879941, 'U3W3Z9d26qSnhO-Q29IvGEnr-O23n3dD_1563879941');
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
