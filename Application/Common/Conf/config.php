<?php
return array(
    'DEFAULT_FILTER'        =>  'htmlspecialchars', // 默认参数过滤方法 用于I函数...
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'task_system',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'think_',    // 数据库表前缀
    'TMPL_DETECT_THEME'     =>  false,       // 自动侦测模板主题
    'TMPL_LAYOUT_ITEM'      =>  '{__CONTENT__}', // 布局模板的内容替换标识
    'LAYOUT_ON'             =>  true, // 是否启用布局
    'LAYOUT_NAME'           =>  'main', // 当前布局名称 默认为layout
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'SHOW_PAGE_TRACE'       =>  true,
    'DB_FIELDS_CACHE'       =>  false,    //数据库文件缓存




    'TMPL_PARSE_STRING'  =>array(     
    '__PUBLIC__' => "/task_system/Public/", // 更改默认的/Public 替换规则      
    '__UPLOAD__' => '/Public/upload/', // 增加新的上传路径替换规则
    ),




);