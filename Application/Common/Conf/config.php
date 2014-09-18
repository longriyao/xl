<?php
return array(
	//'配置项'=>'配置值'
    //数据库
    'DB_DSN' => 'mysql://root:@localhost:3306/xl#utf8',
    'DB_PREFIX' => 'xl_',
    //权限验证
    //
    //安全措施
    'DEFAULT_FILTER' => 'htmlspecialchars,trim',

    //显示设置
    'sitePageNum' => '2',
    
    //调试设置  会与Ueditor冲突
    'SHOW_PAGE_TRACE' =>true, 
);
