<?php
return array(
	'URL_CASE_INSENSITIVE' =>true,
	'DEFAULT_FILTER' => 'strip_tags,htmlspecialchars',//过滤
	 'APP_DEBUG' => true, // 开启调试模式   
     'db_type'  => 'mysql',
     'db_user'  => 'root',
     'db_pwd'   => '',
     'db_host'  => 'localhost',
     'db_port'  => '3306',
     'db_name'  => 'blog',
     'DB_PREFIX'    =>  'exam_',     // 数据库表前缀
	'DB_DSN'       =>  '',     // 数据库连接DSN 用于PDO方式
	'DB_CHARSET'   =>  'utf8', // 数据库的编码 默认为utf8
     '__PUBLIC__'=>'',
     '__CSS__'=>''
);