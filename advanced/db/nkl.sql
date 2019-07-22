-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-07-22 19:01:42
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `nkl`
--

-- --------------------------------------------------------

--
-- 表的结构 `nkl_activity_info`
--

CREATE TABLE `nkl_activity_info` (
  `activity_id` int(11) NOT NULL,
  `activity_info` varchar(500) NOT NULL,
  `activity_location` varchar(100) NOT NULL,
  `activity_beginDate` date NOT NULL,
  `activity_beginTime` time DEFAULT NULL,
  `activity_endDate` date NOT NULL,
  `activity_endTime` time DEFAULT NULL,
  `activity_hostDept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nkl_activity_info`
--

INSERT INTO `nkl_activity_info` (`activity_id`, `activity_info`, `activity_location`, `activity_beginDate`, `activity_beginTime`, `activity_endDate`, `activity_endTime`, `activity_hostDept`) VALUES
(1, '南开大学“校长杯”互联网+大学生创新创业大赛启动会', '全校', '2019-03-29', NULL, '2019-03-29', NULL, '团委'),
(2, '百年南开植物生物学名家论坛', '八里台校区生物站报告厅', '2019-04-20', NULL, '2019-04-20', NULL, '生命科学学院');

-- --------------------------------------------------------

--
-- 表的结构 `nkl_bbs_info`
--

CREATE TABLE `nkl_bbs_info` (
  `bbs_id` int(11) NOT NULL,
  `bbs_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bbs_userNickname` varchar(25) NOT NULL,
  `bbs_userDescribe` varchar(50) NOT NULL,
  `bbs_content` varchar(500) NOT NULL,
  `bbs_isSelected` tinyint(1) NOT NULL DEFAULT '0',
  `bbs_isSolved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nkl_bbs_info`
--

INSERT INTO `nkl_bbs_info` (`bbs_id`, `bbs_time`, `bbs_userNickname`, `bbs_userDescribe`, `bbs_content`, `bbs_isSelected`, `bbs_isSolved`) VALUES
(1, '2019-07-20 10:22:00', '赵明', '哲学系83级', '祝南开早日成为世界一流大学，完成张伯苓老校长的夙愿！', 1, 1),
(2, '2019-07-20 10:22:38', '邓承浩', '2009级商学院旅游管理校友', '南开百年华诞将至，历百载愈淬公能初心，新时代更彰日新月异，祝愿母校永远年轻！', 1, 1),
(3, '2019-07-20 10:23:19', '陈静雯', '17级 国际关系专业格拉斯哥班', '白河之滨，汇聚四海英才。南以开拓，公能传承百年。同祝华诞，迎日新月异。', 1, 1),
(4, '2019-07-20 17:46:16', '南开大学第二十届研究生支教团', '南开大学第二十届研究生支教团', '二十载扎根西部，于三尺讲台书青春华章；  一百年壮怀难折，为泱泱中华筑公能学府。  中兴业，当吾辈！巍巍南开，月异日新！', 0, 1),
(5, '2019-07-21 14:16:10', '2017年经济管理贵州南开校友会', '2017年经济管理贵州南开校友会', '希望母校越来越好', 0, 0),
(6, '2019-07-22 13:16:41', '李伟', '2017级南开计算机学院', '祝母校越来越好<img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/f6/2018new_aini_org.png\" height=\"22\" width=\"22\" />', 1, 1),
(7, '2019-07-22 16:13:16', '李双庆', '2017年经济管理贵州南开校友会', '哈哈哈哈哈<img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/71/2018new_touxiao_org.png\" height=\"22\" width=\"22\" />', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `nkl_bbs_selectrecord`
--

CREATE TABLE `nkl_bbs_selectrecord` (
  `manger_id` int(11) NOT NULL,
  `bbs_isSelected` tinyint(1) NOT NULL,
  `bbs_solveTime` datetime NOT NULL,
  `bbs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nkl_bbs_selectrecord`
--

INSERT INTO `nkl_bbs_selectrecord` (`manger_id`, `bbs_isSelected`, `bbs_solveTime`, `bbs_id`) VALUES
(1, 0, '2019-07-21 00:00:00', 4);

--
-- 触发器 `nkl_bbs_selectrecord`
--
DELIMITER $$
CREATE TRIGGER `tg_bbs_isSolved` AFTER INSERT ON `nkl_bbs_selectrecord` FOR EACH ROW begin
update nkl_bbs_info set bbs_isSolved=1 where nkl_bbs_info.bbs_id = new.bbs_id;
update nkl_bbs_info set bbs_isSelected=new.bbs_isSelected where nkl_bbs_info.bbs_id = new.bbs_id;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `nkl_history_info`
--

CREATE TABLE `nkl_history_info` (
  `history_id` int(11) NOT NULL,
  `history_title` varchar(100) NOT NULL,
  `history_passage` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nkl_history_info`
--

INSERT INTO `nkl_history_info` (`history_id`, `history_title`, `history_passage`) VALUES
(1, '始于1919', '自创建以来，南开大学历经坎坷。<br />\r\n建立之初，只是一所规模很小的私立学校.<br />\r\n在多方努力下，得到了很大的发展。<br />\r\n日军蹂躏中华，南开热血儿纷纷投入抗日运动。<br />\r\n1937年7月，天津沦陷，南开大学被日军炸毁。<br />\r\n流亡南迁后，与北大、清华成立为西南联大。<br />\r\n从1937年至1946年，西南联大最后结束。<br />\r\n1946年，南开复员之后遂改立为国立大学。<br />\r\n复员之后，南开园得以重建。<br />'),
(2, '水田风光', '三十年代初，南开大学是有名的风景游览区。<br />\r\n当时，诗人柳亚子在南开大学赋诗称道：<br />\r\n汽车飞驶抵南开，水影林光互抱怀。<br />\r\n此是桃源仙境界，已同浊世隔尘埃。 <br />\r\n“水”是南开大学校园的一大特色。<br />\r\n整个学校被支河细流所环绕,有水田风光。<br />\r\n校内小溪纵横交错，南北通达。<br />'),
(3, '私立时期', '南开大学孕育于新文化运动，诞生于五四运动。<br />\r\n在北洋军阀的黑暗统治下，教育得不到重视。<br />\r\n在其成立的最初几年，是最艰难的一个时期。<br />\r\n在建立初期，南开大学就开时代先声，<br />\r\n实行男女同校，这在北方私立大学中为第一家。<br />\r\n1928年，学校提出以“土货化”为今后发展的根本方针。<br />\r\n这是南开教育的重大进步，也是其发展到新阶段的标志。<br />'),
(4, '西南联大', '华北事变后，形势日趋紧张。日军向天津进攻。<br />\r\n7月30日凌晨一点，日军开始向南开大学开炮。<br />\r\n南开大学校园遭受了日军侵略者八年的蹂躏。<br />\r\n南开被毁，是抗战中全国首个罹难的高等学府。<br />\r\n财产损失占高校全部战争损失的十分之一。<br />\r\n南开为中国而牺牲，有中国即有南开！<br />\r\n1937年南开大学与清北共同成立长沙临时大学。<br />\r\n1938年国立长沙临时大学改称西南联合大学。<br />'),
(5, '百年积淀，再创辉煌', '南开大学是国家教育部直属重点综合性大学，<br />\r\n是敬爱的周恩来总理的母校。<br />\r\n被誉为“学府北辰”。<br />\r\n是国内学科齐全的综合性、研究型大学之一。<br />\r\n南开大学坚持“允公允能，日新月异”的校训，<br />\r\n形成了文理并重、基础宽厚、<br />\r\n突出应用与创新的办学特色。<br />\r\n2019年，南开大学将迎来建校百年。<br />\r\n南开大学将继续为建设南开品格、<br />\r\n中国特色、世界一流大学而努力奋斗！<br />');

-- --------------------------------------------------------

--
-- 表的结构 `nkl_managers_info`
--

CREATE TABLE `nkl_managers_info` (
  `manager_id` int(11) NOT NULL,
  `manager_name` varchar(25) NOT NULL,
  `manager_sex` char(1) DEFAULT NULL,
  `manager_email` varchar(255) NOT NULL,
  `manager_grade` int(11) NOT NULL,
  `manager_college` varchar(25) NOT NULL,
  `manager_major` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nkl_managers_info`
--

INSERT INTO `nkl_managers_info` (`manager_id`, `manager_name`, `manager_sex`, `manager_email`, `manager_grade`, `manager_college`, `manager_major`) VALUES
(1, '周辰霏', '女', '1712991@mail.nankai.edu.cn', 2017, '计算机学院', '计算机科学与技术'),
(2, '乔静欣', '女', 'qjx@qjx.com', 2017, '网络空间安全学院', '信息安全'),
(3, '李伟', '男', 'lw@lw.com', 2017, '计算机学院', '计算机科学与技术'),
(4, '李力挺', '男', 'llt@llt.com', 2017, '计算机学院', '计算机科学与技术'),
(5, '朱心怡', '女', 'zxy@zxy.com', 2017, '网络空间安全学院', '信息安全');

-- --------------------------------------------------------

--
-- 表的结构 `nkl_managers_login`
--

CREATE TABLE `nkl_managers_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '账户',
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `mobile` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '手机号码（登录账号）',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '状态',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- 表的结构 `nkl_news_info`
--

CREATE TABLE `nkl_news_info` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_releaser` int(11) NOT NULL,
  `news_releaseTime` date NOT NULL,
  `news_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nkl_news_info`
--

INSERT INTO `nkl_news_info` (`news_id`, `news_title`, `news_releaser`, `news_releaseTime`, `news_link`) VALUES
(1, '【迎百年校庆】帕特里克·博尔顿教授做客“百年南开大讲坛', 1, '2019-07-13', 'http://news.nankai.edu.cn/ywsd/system/2019/07/13/030034433.shtml'),
(2, '【迎百年校庆】迈克尔贝里爵士做客“百年南开大讲坛', 1, '2019-07-11', 'http://news.nankai.edu.cn/ywsd/system/2019/07/11/030034401.shtml'),
(3, '南开大学建校100周年倒计时100天启动仪式南开获捐1.15亿元', 1, '2019-07-10', 'http://news.nankai.edu.cn/ywsd/system/2019/07/10/030034377.shtml'),
(4, '南开大学与交通银行天津分行签署百年校庆活动合作协议', 1, '2019-07-10', 'http://news.nankai.edu.cn/ywsd/system/2019/07/10/030034371.shtml'),
(5, '南开大学“界面新闻天津频道”全霸屏', 1, '2019-07-10', 'http://news.nankai.edu.cn/ywsd/system/2019/07/10/030034373.shtml'),
(6, '南开大学重庆校友会2018年年会暨首届渝州论坛举行', 1, '2019-01-21', 'http://news.nankai.edu.cn/ywsd/system/2019/01/21/000430474.shtml'),
(7, '我校与今晚报联合主办“南开大学100年”征文今启动', 1, '2019-01-18', 'http://news.nankai.edu.cn/ywsd/system/2019/01/18/000429714.shtml'),
(13, '南开大学获三位校友匿名捐款1.72亿元', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428494.shtml'),
(15, '【我与南开的故事】群星璀璨 南开先生', 1, '2019-02-28', 'http://news.nankai.edu.cn/ywsd/system/2019/02/28/000434835.shtml'),
(16, '南开北京校友会2018年年会举行', 1, '2019-01-08', 'http://news.nankai.edu.cn/ywsd/system/2019/01/18/000429635.shtml'),
(17, '南开海南校友会2018年会暨庆祝南开大学建校100周年新春联谊会召开', 1, '2019-01-15', 'http://news.nankai.edu.cn/ywsd/system/2019/01/15/000428974.shtml'),
(18, '黄友义教授做客“百年南开大讲坛”', 1, '2019-01-15', 'http://news.nankai.edu.cn/ywsd/system/2019/01/15/000428995.shtml'),
(19, '第七届药学领域国家重点实验室发展与交流学术年会南开举行', 1, '2019-01-12', 'http://news.nankai.edu.cn/ywsd/system/2019/01/12/000428695.shtml'),
(20, '中国科学院外籍院士王中林做客“百年南开大讲坛”', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428515.shtml'),
(21, '南开大学获三位校友匿名捐款1.72亿元', 1, '2019-01-11', 'http://news.nankai.edu.cn/ywsd/system/2019/01/11/000428494.shtml'),
(22, '倒计时300天 校庆吉祥物、“南开百年艺术日历”首亮相', 1, '2018-12-22', 'http://news.nankai.edu.cn/ywsd/system/2018/12/22/000424834.shtml'),
(24, '【南开大学100年】张伯苓校长的“爱国三问”', 1, '2019-02-25', 'http://news.nankai.edu.cn/ywsd/system/2019/02/25/000434354.shtml'),
(25, '【我和南开的故事】我有一段情', 1, '2019-03-27', 'http://news.nankai.edu.cn/ywsd/system/2019/03/25/000439614.shtml'),
(26, '南开大学图书馆展出馆藏严范孙、张伯苓手札', 1, '2019-04-24', 'http://news.nankai.edu.cn/ywsd/system/2019/04/24/000446754.shtml'),
(27, '首届南开全球校友马拉松赛举行', 1, '2019-04-21', 'http://news.nankai.edu.cn/ywsd/system/2019/04/21/000446254.shtml'),
(28, '马志明院士做客“百年南开大讲坛”', 1, '2019-06-01', 'http://news.nankai.edu.cn/ywsd/system/2019/06/06/030033883.shtml'),
(29, '“南开百年周恩来大讲堂”新获捐5000万元', 1, '2019-07-09', 'http://news.nankai.edu.cn/ywsd/system/2019/07/09/030034368.shtml'),
(30, '南开大学建校100周年倒计时100天启动仪式举行', 1, '2019-07-09', 'http://news.nankai.edu.cn/ywsd/system/2019/07/09/030034367.shtml'),
(31, '【迎百年校庆】多伦·奥巴赫教授做客“百年南开大讲坛”', 1, '2019-07-03', 'http://news.nankai.edu.cn/ywsd/system/2019/07/07/030034270.shtml'),
(32, '南开洛杉矶校友会举行庆祝南开大学建校100周年大会', 1, '2019-06-26', 'http://news.nankai.edu.cn/ywsd/system/2019/07/04/030034234.shtml'),
(33, '南开大学复建三栋历史建筑主体完工', 1, '2018-12-18', 'http://news.nankai.edu.cn/ywsd/system/2018/12/18/000424074.shtml'),
(34, '南开大学建校100周年倒计时200天仪式举行', 1, '2019-03-31', 'http://news.nankai.edu.cn/ywsd/system/2019/03/31/000440797.shtml'),
(35, '11位深圳校友向母校南开大学捐款1.8亿元', 1, '2019-03-31', 'http://news.nankai.edu.cn/ywsd/system/2019/03/31/000440734.shtml'),
(36, '中国社科院辛向阳研究员做客“百年南开大讲坛”', 1, '2019-03-26', 'http://news.nankai.edu.cn/ywsd/system/2019/03/26/000439777.shtml'),
(37, '梁其姿院士做客“百年南开大讲坛”', 1, '2019-03-25', 'http://news.nankai.edu.cn/ywsd/system/2019/03/25/000439634.shtml'),
(38, '周其林院士做客“百年南开大讲坛”', 1, '2019-03-24', 'http://news.nankai.edu.cn/ywsd/system/2019/03/24/000439534.shtml'),
(39, '龚克为“南开大学习近平新时代中国特色社会主义思想大讲堂”做首讲', 1, '2019-03-23', 'http://news.nankai.edu.cn/ywsd/system/2019/03/23/000439514.shtml'),
(40, '南开大学百年校庆公告（第一号）', 1, '2018-09-27', 'http://news.nankai.edu.cn/ywsd/system/2018/09/27/000411474.shtml');

-- --------------------------------------------------------

--
-- 表的结构 `nkl_products_info`
--

CREATE TABLE `nkl_products_info` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_storage` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nkl_products_info`
--

INSERT INTO `nkl_products_info` (`product_id`, `product_name`, `product_price`, `product_storage`) VALUES
(1, '南开风景明信片', 14.00, 40),
(2, '学位熊', 150.00, 40),
(3, '阳阳与亮亮', 110.00, 40),
(4, '校徽', 65.00, 40),
(5, '口红套装', 280.00, 40),
(6, '保温杯', 80.00, 40),
(7, '荷花木雕水水杯垫', 18.00, 40),
(8, '兔子玩偶', 115.00, 40);

-- --------------------------------------------------------

--
-- 表的结构 `nkl_purchase_record`
--

CREATE TABLE `nkl_purchase_record` (
  `purchase_time` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nkl_purchase_record`
--

INSERT INTO `nkl_purchase_record` (`purchase_time`, `user_id`, `product_id`) VALUES
('2019-07-22 18:05:49', 12345, 3),
('2019-07-22 18:10:13', 12345, 3),
('2019-07-22 18:10:36', 12345, 6),
('2019-07-22 18:43:22', 12345, 1);

-- --------------------------------------------------------

--
-- 表的结构 `nkl_users_login`
--

CREATE TABLE `nkl_users_login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_password_hash` varchar(255) NOT NULL,
  `user_auth_key` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转储表的索引
--

--
-- 表的索引 `nkl_activity_info`
--
ALTER TABLE `nkl_activity_info`
  ADD PRIMARY KEY (`activity_id`);

--
-- 表的索引 `nkl_bbs_info`
--
ALTER TABLE `nkl_bbs_info`
  ADD PRIMARY KEY (`bbs_id`);

--
-- 表的索引 `nkl_bbs_selectrecord`
--
ALTER TABLE `nkl_bbs_selectrecord`
  ADD PRIMARY KEY (`manger_id`,`bbs_solveTime`) USING BTREE,
  ADD KEY `bbs_id` (`bbs_id`);

--
-- 表的索引 `nkl_history_info`
--
ALTER TABLE `nkl_history_info`
  ADD PRIMARY KEY (`history_id`);

--
-- 表的索引 `nkl_managers_info`
--
ALTER TABLE `nkl_managers_info`
  ADD PRIMARY KEY (`manager_id`);

--
-- 表的索引 `nkl_managers_login`
--
ALTER TABLE `nkl_managers_login`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `nkl_news_info`
--
ALTER TABLE `nkl_news_info`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_releaser` (`news_releaser`);

--
-- 表的索引 `nkl_products_info`
--
ALTER TABLE `nkl_products_info`
  ADD PRIMARY KEY (`product_id`);

--
-- 表的索引 `nkl_purchase_record`
--
ALTER TABLE `nkl_purchase_record`
  ADD PRIMARY KEY (`purchase_time`,`user_id`);

--
-- 表的索引 `nkl_users_login`
--
ALTER TABLE `nkl_users_login`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `nkl_activity_info`
--
ALTER TABLE `nkl_activity_info`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `nkl_bbs_info`
--
ALTER TABLE `nkl_bbs_info`
  MODIFY `bbs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `nkl_history_info`
--
ALTER TABLE `nkl_history_info`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `nkl_managers_info`
--
ALTER TABLE `nkl_managers_info`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `nkl_managers_login`
--
ALTER TABLE `nkl_managers_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `nkl_news_info`
--
ALTER TABLE `nkl_news_info`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用表AUTO_INCREMENT `nkl_products_info`
--
ALTER TABLE `nkl_products_info`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `nkl_users_login`
--
ALTER TABLE `nkl_users_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 限制导出的表
--

--
-- 限制表 `nkl_bbs_selectrecord`
--
ALTER TABLE `nkl_bbs_selectrecord`
  ADD CONSTRAINT `nkl_bbs_selectrecord_ibfk_2` FOREIGN KEY (`bbs_id`) REFERENCES `nkl_bbs_info` (`bbs_id`),
  ADD CONSTRAINT `nkl_bbs_selectrecord_ibfk_3` FOREIGN KEY (`manger_id`) REFERENCES `nkl_managers_info` (`manager_id`);

--
-- 限制表 `nkl_news_info`
--
ALTER TABLE `nkl_news_info`
  ADD CONSTRAINT `nkl_news_info_ibfk_1` FOREIGN KEY (`news_releaser`) REFERENCES `nkl_managers_info` (`manager_id`);

--
-- 限制表 `nkl_purchase_record`
--
ALTER TABLE `nkl_purchase_record`
  ADD CONSTRAINT `nkl_purchase_record_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `nkl_users_login` (`user_id`),
  ADD CONSTRAINT `nkl_purchase_record_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `nkl_products_info` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
