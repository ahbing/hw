<?php
return array(
	//'配置项'=>'配置值'
  'URL_HTML_SUFFIX' => 'html',
  'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg', // URL禁止访问的后缀设置

  /* 数据库配置 */
  'DB_TYPE'   => 'mysql', // 数据库类型
  'DB_HOST'   => 'localhost', // 服务器地址
  'DB_NAME'   => 'hw', // 数据库名
  'DB_USER'   => 'root', // 用户名
  'DB_PWD'    => 'zhlt1234',  // 密码
  'DB_PORT'   => '3306', // 端口
  'DB_PREFIX' => 'hw_', // 数据库表前缀

  'WEB_SITE_TITLE' => 'HelloWorld',

  'URL_CASE_INSENSITIVE' =>true, //不区分大小写

  'SHOW_ERROR_MSG' => ture,
  'URL_MODEL'   =>  2,
  'SESSION_AUTO_START' => true,

  'SHOW_PAGE_TRACE' => true,

  'MODULE_ALLOW_LIST' => array('Home', 'Admin'), //允许访问的模块列表
);