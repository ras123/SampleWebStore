CREATE TABLE `rasblog_comments` (
  `id` int(11) NOT NULL auto_increment,
  `blog_id` int(11) default NULL,
  `content` text,
  `created_at` datetime default NULL,
  `updated_at` datetime default NULL,
  `created_user_id` int(11) default NULL,
  `updated_user_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `blog_id` (`blog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;