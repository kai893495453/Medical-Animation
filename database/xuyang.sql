-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-03-26 08:46:06
-- 服务器版本： 5.5.48
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuyang`
--

-- --------------------------------------------------------

--
-- 表的结构 `columns`
--

CREATE TABLE IF NOT EXISTS `columns` (
  `col_id` int(20) NOT NULL,
  `col_name` varchar(20) NOT NULL,
  `col_keywords` varchar(50) NOT NULL,
  `col_description` text NOT NULL,
  `col_banner` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int(20) NOT NULL,
  `company_title` varchar(30) NOT NULL,
  `company_info` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `contact`
--

INSERT INTO `contact` (`c_id`, `company_title`, `company_info`) VALUES
(1, '地 址：', '广州市天河区燕岭路120号金燕大厦502'),
(2, '邮 箱：', '123456789@qq.com'),
(3, '联系电话：', '440-009-9778'),
(4, '传 真：', '1234567890');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nid` int(20) unsigned NOT NULL,
  `author_id` int(20) NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `ntid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `news_type`
--

CREATE TABLE IF NOT EXISTS `news_type` (
  `ntid` int(20) unsigned NOT NULL,
  `typename` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news_type`
--

INSERT INTO `news_type` (`ntid`, `typename`) VALUES
(1, '案例分享'),
(2, '新闻动态'),
(3, '维生素'),
(4, '矿物质'),
(5, '营养素'),
(6, '增强免疫力'),
(7, '辅助降血脂'),
(8, '辅助降血糖'),
(9, '抗氧化、延缓衰老'),
(10, '辅助改善记忆力 '),
(11, '辅助降血压'),
(12, '抗辐射'),
(13, '减肥'),
(14, '增加骨密度'),
(15, '提高缺氧耐受力'),
(16, '促进排铅'),
(17, '改善睡眠');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(20) NOT NULL,
  `product_info` varchar(100) NOT NULL,
  `tag_id` int(20) NOT NULL,
  `saleservice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `d_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `product_feature`
--

CREATE TABLE IF NOT EXISTS `product_feature` (
  `f_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `product_parameter`
--

CREATE TABLE IF NOT EXISTS `product_parameter` (
  `para_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `product_tag`
--

CREATE TABLE IF NOT EXISTS `product_tag` (
  `t_id` int(20) NOT NULL,
  `tagname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `recruit`
--

CREATE TABLE IF NOT EXISTS `recruit` (
  `r_id` int(20) NOT NULL,
  `job_info` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `recruit`
--

INSERT INTO `recruit` (`r_id`, `job_info`) VALUES
(1, '【广州】创意文案经理'),
(2, '【北京】电商咨询总监/经理'),
(3, '【北京】电商运用 COO'),
(4, '【上海】电商设计师'),
(5, '【北京】包装设计师');

-- --------------------------------------------------------

--
-- 表的结构 `recruit_info`
--

CREATE TABLE IF NOT EXISTS `recruit_info` (
  `riid` int(20) NOT NULL,
  `rinfo_title` varchar(30) NOT NULL,
  `rinfo_content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `recruit_info`
--

INSERT INTO `recruit_info` (`riid`, `rinfo_title`, `rinfo_content`) VALUES
(1, '1、报名时间', '2013年9月10日-2013年9月28日'),
(2, '2、报名方式', '本公告刊登在蚌埠市旭阳医疗动漫科技有限公司网站，应聘者可登陆网站进行报名。<br>\r\n联系人：郭先生；联系电话：（020）12345678<br>\r\nhttp://career.xuyangyiliao.com.cn/gcgs02/UserLogin.aspx'),
(3, '3、报名要求', '参加笔试时提供以下材料：身份证、学历／学位证、职业资格证书等相关资料的原件及复印件。'),
(4, '4、招聘程序', '报名-资格初审-笔试-面试-发录取函-试用-正式录用。'),
(5, '5、说明', '（1）我们承诺为应聘人员保密所有信息资料；<br>\r\n（2）应聘人员应对提交材料的真实性负责，凡弄虚作假者，一经查实，取消应聘资格；<br>\r\n（3）以上条款由蚌埠市旭阳医疗动漫科技有限公司人力资源部负责解释。');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(20) unsigned NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(36) NOT NULL,
  `realname` varchar(36) DEFAULT NULL,
  `email` varchar(36) NOT NULL,
  `hospital` varchar(50) DEFAULT NULL,
  `depa` varchar(50) DEFAULT NULL,
  `job` varchar(30) DEFAULT NULL,
  `depa_phone` varchar(20) DEFAULT NULL,
  `more_info` text,
  `invi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `columns`
--
ALTER TABLE `columns`
  ADD PRIMARY KEY (`col_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`ntid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `product_feature`
--
ALTER TABLE `product_feature`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `product_parameter`
--
ALTER TABLE `product_parameter`
  ADD PRIMARY KEY (`para_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `recruit`
--
ALTER TABLE `recruit`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `recruit_info`
--
ALTER TABLE `recruit_info`
  ADD PRIMARY KEY (`riid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `columns`
--
ALTER TABLE `columns`
  MODIFY `col_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `ntid` int(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `d_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_feature`
--
ALTER TABLE `product_feature`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_parameter`
--
ALTER TABLE `product_parameter`
  MODIFY `para_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recruit`
--
ALTER TABLE `recruit`
  MODIFY `r_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recruit_info`
--
ALTER TABLE `recruit_info`
  MODIFY `riid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(20) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
