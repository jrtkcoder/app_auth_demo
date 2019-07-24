-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 06 月 26 日 03:42
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shouquan`
--

-- --------------------------------------------------------

--
-- 表的结构 `authorize`
--

CREATE TABLE IF NOT EXISTS `authorize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `qq` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `syskey` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `ip_qh` int(1) NOT NULL,
  `yumi` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `domain` (`domain`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `authorize`
--

INSERT INTO `authorize` (`id`, `username`, `domain`, `ip`, `qq`, `tel`, `time`, `syskey`, `version`, `ip_qh`, `yumi`) VALUES
(1, '测试', 'sq.hk', '192.168.234.136', '403700890', '0769-33232320', '1497542400', 'b12893ab32172ede', '1.2', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `daoban`
--

CREATE TABLE IF NOT EXISTS `daoban` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `beizhu` text NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message_1` varchar(255) NOT NULL,
  `message_2` varchar(255) NOT NULL,
  `message_3` varchar(255) NOT NULL,
  UNIQUE KEY `ID` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `message_1`, `message_2`, `message_3`) VALUES
(1, '未授权域名，授权请QQ：15907754', '授权已经到期', '授权IP不正确');

-- --------------------------------------------------------

--
-- 表的结构 `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `yxtime` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `site`
--

INSERT INTO `site` (`id`, `title`, `yxtime`, `copyright`, `site_name`, `route`) VALUES
(1, 'PHP授权系统 v2.6.8', '2017-01-01', 'PHP授权系统 v2.6.8 by Giovanne Oliveira 0766city.com.', 'index.php', '/data/assets/');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `money` float NOT NULL DEFAULT '0',
  `lotime` int(10) unsigned NOT NULL,
  `login` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `money`, `lotime`, `login`) VALUES
(1, 'admin', '7fef6171469e80d32c0559f88b377245', 'admin@admin.com', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `version`
--

CREATE TABLE IF NOT EXISTS `version` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `version`
--

INSERT INTO `version` (`id`, `name`, `content`, `file`) VALUES
(1, '1.2', 'PHA+576O5LuR56iL5bqPVjEuMemrmOe6p+eJiDIwMTQwNTE55pu05paw6K6w5b2VPC9wPg0KPHA+MeOAgeabtOaWsOmrmOe6p+eJiOaJgOmcgOeahOWcqOe6v+aWh+S7tuOAgjwvcD4NCg==', '1.2.zip');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
