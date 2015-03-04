<?php
return array(
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
    'DEFAULT_MODULE'       =>    'Home',
    'URL_CASE_INSENSITIVE' =>true,
    'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名配置
    'APP_SUB_DOMAIN_RULES'    =>    array(
        'admin.had.com'  => 'Admin',  // admin.domain1.com域名指向Admin模块
        'www.had.com'  => 'Home',
    ),
    'URL_MODEL' => '1',
       /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'had',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '045861albean',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'had_',    // 数据库表前缀
);