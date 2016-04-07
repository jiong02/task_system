-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-04-07 03:39:17
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `task_system`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group`
--

CREATE TABLE IF NOT EXISTS `think_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `think_auth_group`
--

INSERT INTO `think_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(1, '任务创建者', 1, '1,2,3,4,5,6'),
(2, '任务参与者', 1, '1,2,4,5,6'),
(3, '测试', 1, '1,3,4,5,6');

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `think_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_auth_group_access`
--

INSERT INTO `think_auth_group_access` (`uid`, `group_id`) VALUES
(0, 3);

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_rule`
--

CREATE TABLE IF NOT EXISTS `think_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `think_auth_rule`
--

INSERT INTO `think_auth_rule` (`id`, `name`, `title`, `status`, `condition`) VALUES
(1, 'Home/Index/login', '登录页面', 1, ''),
(2, 'Home/Index/index', '首页', 1, ''),
(3, 'Home/Task/task', '新建任务', 1, ''),
(4, 'Home/Task/task_all', '查看所有任务', 1, ''),
(5, 'Home/Pal/search', '搜索好友', 1, ''),
(6, 'Home/Pal/login_info', '个人中心', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `think_pal`
--

CREATE TABLE IF NOT EXISTS `think_pal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `login_user` int(11) NOT NULL COMMENT '登陆人',
  `attention_user` int(11) NOT NULL COMMENT '关注的好友',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='好友列表' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `think_pal`
--

INSERT INTO `think_pal` (`id`, `login_user`, `attention_user`) VALUES
(1, 1, 2),
(12, 1, 3),
(11, 1, 4);

-- --------------------------------------------------------

--
-- 表的结构 `think_project`
--

CREATE TABLE IF NOT EXISTS `think_project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `projected_creater` varchar(20) NOT NULL,
  `project_name` varchar(20) NOT NULL COMMENT '项目名称',
  `member` varchar(20) NOT NULL COMMENT '成员',
  `project_img` varchar(32) NOT NULL COMMENT '项目图片',
  `explain` varchar(35) NOT NULL COMMENT '说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='项目' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `think_task`
--

CREATE TABLE IF NOT EXISTS `think_task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `projected_id` varchar(32) NOT NULL COMMENT '所属项目',
  `grade` char(3) NOT NULL COMMENT '等级',
  `give_user` char(5) NOT NULL COMMENT '任务分配者',
  `do_user` char(5) NOT NULL COMMENT '完成任务者',
  `task_content` varchar(32) NOT NULL COMMENT '任务内容',
  `deadline` varchar(32) NOT NULL COMMENT '截止时间',
  `status` char(5) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='任务' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `groupID` int(11) NOT NULL,
  `status` char(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `user_name`, `user_password`, `groupID`, `status`) VALUES
(1, 'admin', '123456', 2, '1'),
(2, '奇怪的机器人', '123456', 0, '1'),
(3, 'You_goods', '123456', 0, '1'),
(4, 'task', '123456', 0, '1');

-- --------------------------------------------------------

--
-- 表的结构 `think_user_center`
--

CREATE TABLE IF NOT EXISTS `think_user_center` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_name` varchar(32) NOT NULL COMMENT '用户名称',
  `sex` char(3) NOT NULL COMMENT '性别',
  `email` varchar(32) NOT NULL COMMENT '邮箱',
  `qq` varchar(32) NOT NULL COMMENT 'QQ',
  `city` varchar(10) NOT NULL COMMENT '地区',
  `work` varchar(10) NOT NULL COMMENT '工作情况',
  `motto` varchar(32) NOT NULL COMMENT '座右铭',
  `user_tag` varchar(32) NOT NULL COMMENT '个人标签',
  `user_img` varchar(60) NOT NULL DEFAULT '/task_system/Public//images/touxiang/touxiang4.png' COMMENT '头像',
  `groupID` char(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='个人中心' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `think_user_center`
--

INSERT INTO `think_user_center` (`id`, `user_name`, `sex`, `email`, `qq`, `city`, `work`, `motto`, `user_tag`, `user_img`, `groupID`) VALUES
(1, 'admin', '男', '1312623396@qq.com', '1312623396', '广州', '在职', '这个人很懒', 'LAMP,CSS,HTML,PHP,MYSQL,WEB,', '/task_system/Public//images/touxiang/touxiang4.png', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
