<?php
return array(
	'DEFAULT_THEME'         =>  '', // 默认模板主题名称
    'DEFAULT_FILTER'        =>  'htmlspecialchars', // 默认参数过滤方法 用于I函数...
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'task_system',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'think_',    // 数据库表前缀
    'ERROR_MESSAGE'         =>  '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
    'ERROR_PAGE'            =>  '/task_system/Public/error.html', // 错误定向页面
    'TMPL_EXCEPTION_FILE'   =>  '/task_system/Public/error.html',
    'SHOW_ERROR_MSG'        =>  false,    // 显示错误信息
    'LOG_RECORD'            =>  false,   // 默认不记录日志
    'LOG_EXCEPTION_RECORD'  =>  true,    // 是否记录异常信息日志
    'TMPL_DETECT_THEME'     =>  false,       // 自动侦测模板主题
    'TMPL_LAYOUT_ITEM'      =>  '{__CONTENT__}', // 布局模板的内容替换标识
    'LAYOUT_ON'             =>  true, // 是否启用布局
    'LAYOUT_NAME'           =>  'main', // 当前布局名称 默认为layout
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'SHOW_PAGE_TRACE'       =>  true,
    'DB_FIELDS_CACHE'       =>  false,    //数据库文件缓存
    'EMPTY_PATH'            =>  '/index.php', /*访问不存在的模块时跳转的地址*/



    'TMPL_PARSE_STRING'  =>array(     
    '__PUBLIC__' => "/task_system/Public/", // 更改默认的/Public 替换规则     
    // '__JS__'     => '/Public/JS/',  // 增加新的JS类库路径替换规则   
    '__UPLOAD__' => '/Public/upload/', // 增加新的上传路径替换规则
    ),

    'AUTH_CONFIG' => array(
        'AUTH_ON'           => false,
        'AUTH_TYPE'         => 1,//1为时时认证，2为登录认证
        'AUTH_GROUP'        => 'think_auth_group',
        'AUTH_GROUP_ACCESS' => 'think_auth_group_access',
        'AUTH_RULE'         => 'think_auth_rule',
        'AUTH_USER'         => 'think_user',
    ),




);