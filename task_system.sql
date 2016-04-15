-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-04-14 10:04:58
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
(1, '', 1, '1,2,3,4,5,6'),
(2, '', 1, '1,2,4,5,6'),
(3, '', 1, '1,3,4,5,6');

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
(1, 'Home/Index/login', '', 1, ''),
(2, 'Home/Index/index', '', 1, ''),
(3, 'Home/Task/task', '', 1, ''),
(4, 'Home/Task/task_all', '', 1, ''),
(5, 'Home/Pal/search', '', 1, ''),
(6, 'Home/Pal/login_info', '', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `think_pal`
--

CREATE TABLE IF NOT EXISTS `think_pal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `login_user` int(11) NOT NULL ,
  `attention_user` int(11) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8  AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `think_pal`
--

INSERT INTO `think_pal` (`id`, `login_user`, `attention_user`) VALUES
(1, 1, 2),
(12, 1, 3),
(11, 1, 4),
(13, 5, 1),
(14, 4, 1),
(15, 4, 3),
(16, 4, 5);

-- --------------------------------------------------------

--
-- 表的结构 `think_project`
--

CREATE TABLE IF NOT EXISTS `think_project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `projected_creater` varchar(20) NOT NULL,
  `project_name` varchar(20) NOT NULL ,
  `member` varchar(20) NOT NULL ,
  `project_img` varchar(50) NOT NULL,
  `explain` varchar(35) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8  AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `think_task`
--

CREATE TABLE IF NOT EXISTS `think_task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `projected_id` varchar(32) NOT NULL ,
  `grade` char(3) NOT NULL ,
  `give_user` char(5) NOT NULL ,
  `do_user` char(5) NOT NULL ,
  `task_content` varchar(32) NOT NULL ,
  `deadline` varchar(32) NOT NULL ,
  `status` char(5) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8  AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `user_name`, `user_password`, `groupID`, `status`) VALUES
(1, 'admin', '123456', 2, '1'),
(5, '奇怪的机器人', '123456', 0, '1'),
(3, 'You_goods', '123456', 0, '1'),
(4, 'task', '123456', 0, '1');

-- --------------------------------------------------------

--
-- 表的结构 `think_user_center`
--

CREATE TABLE IF NOT EXISTS `think_user_center` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_name` varchar(32) NOT NULL ,
  `sex` char(3) NOT NULL ,
  `email` varchar(32) NOT NULL,
  `qq` varchar(32) NOT NULL ,
  `city` varchar(10) NOT NULL ,
  `work` varchar(10) NOT NULL ,
  `motto` varchar(32) NOT NULL ,
  `user_tag` varchar(32) NOT NULL ,
  `user_img` varchar(60) NOT NULL DEFAULT '/task_system/Public//images/touxiang/touxiang4.png' ,
  `groupID` char(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8  AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `think_user_center`
--

INSERT INTO `think_user_center` (`id`, `user_name`, `sex`, `email`, `qq`, `city`, `work`, `motto`, `user_tag`, `user_img`, `groupID`) VALUES
(1, 'admin', '男', '1312623396@qq.com', '1312623396', '广州', '在职', '没有啊', 'LAMP,CSS,HTML,PHP,MYSQL,WEB,', '/task_system/Public//images/touxiang/touxiang4.png', ''),
(2, '奇怪的机器人', '女', '1312623396@qq.com', '779771340', '关注', '离职', '没有啊', 'HTML,PHP,', '/task_system/Public//images/touxiang/touxiang4.png', ''),
(4, 'task', '女', '1312623396@qq.com', '1312623396', '佛山', '离职', 'nononono', '666,PHP ,', '/task_system/Public//images/touxiang/touxiang4.png', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
