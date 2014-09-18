<?php if (!defined('THINK_PATH')) exit();?><include file="Public:header">
<ul id="">
    <li>
        文章管理
        <ul id="">
            <li><a href="/xl/index.php/Admin/Article/index" target="main" title="">文章列表</a></li>    
            <li><a href="/xl/index.php/Admin/Article/add" target="main" title="">添加文章</a></li>    
            <li><a href="/xl/index.php/Admin/Category/index" target="main" title="">分类列表</a></li>    
            <li><a href="/xl/index.php/Admin/Category/add" target="main" title="">添加分类</a></li>    
        </ul>
    </li>    
    <li>
        权限管理
        <ul>
            <li><a href="/xl/index.php/Admin/User/index" target="main" >用户列表</a></li>
            <li><a href="/xl/index.php/Admin/User/add" target="main" >添加用户</a></li>
            <li><a href="/xl/index.php/Admin/Usergroup/index" target="main" >用户组列表</a></li>
            <li><a href="/xl/index.php/Admin/Usergroup/add" target="main" >添加用户组</a></li>
        </ul>
    </li>    
        
</ul>