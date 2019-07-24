

CREATE TABLE IF NOT EXISTS `wy_forum_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bgurl` varchar(200) NOT NULL DEFAULT '',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `comcheck` varchar(4) NOT NULL DEFAULT '',
  `intro` varchar(600) NOT NULL DEFAULT '',
  `ischeck` tinyint(4) NOT NULL DEFAULT '0',
  `pv` float NOT NULL DEFAULT '0',
  `forumname` char(60) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `token` varchar(50) NOT NULL,
  `isopen` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `wy_forum_config`
--

INSERT INTO `wy_forum_config` (`id`, `bgurl`, `picurl`, `comcheck`, `intro`, `ischeck`, `pv`, `forumname`, `logo`, `token`, `isopen`) VALUES
(3, '', 'http://138.ymxzw.com/uploads/i/inxrcg1404545250/a/6/7/3/thumb_53bdffa493c9c.jpg', '0', '没有什么哈', 0, 3, '智炫平台官方粉丝社区', 'http://138.ymxzw.com/uploads/i/inxrcg1404545250/b/9/a/4/thumb_53be825bee4e8.jpg', 'inxrcg1404545250', 1);
