CREATE TABLE `rasblog_posts` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `description` text,
  `content` text,
  `created_at` datetime default NULL,
  `updated_at` datetime default NULL,
  `created_user_id` int(11) default NULL,
  `updated_user_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;