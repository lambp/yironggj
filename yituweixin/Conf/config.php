<?php
return array(
    'URL_MODEL'=>1, // 如果你的环境不支持PATHINFO 请设置为3
	 'URL_HTML_SUFFIX'=>'.html',
	 'URL_CASE_INSENSITIVE' =>true,
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'127.0.0.1',
    'DB_NAME'=>'yituweixin',
    'DB_USER'=>'root',
    'DB_PWD'=>'',
    'DB_PORT'=>'3306',
    'DB_PREFIX'=>'',
	"LOAD_EXT_FILE"=>"comfun,functions",//加载公共方法文件
	'APP_GROUP_LIST' => 'home,admin', //项目分组设定
    'DEFAULT_GROUP'  => 'home', //默认分组
);
?>