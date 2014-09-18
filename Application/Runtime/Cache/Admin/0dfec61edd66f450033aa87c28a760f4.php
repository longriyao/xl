<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Clmao">
        <meta http-equiv="Cache-Control" content="no-transform" />
        <meta http-equiv="Cache-Control" content="no-siteapp"/>
        <title><?php echo ($title); ?></title>
        <link rel="apple-touch-icon" href="/xl/Public/appicon.png">
        <link rel="shortcut icon" href="/xl/Public/appicon.png">
        <script src="/xl/Public/js/jquery.min.js"></script>
    </head>
    <body>


<h1><?php echo ($title); ?></h1>
<hr/>

<form action="/xl/index.php/Admin/Login/loginDo" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
    用户名: <input type="text" name="username" value=""><br/>
    密码: <input type="text" name="userpwd" value=""><br/>
    验证码: <input type="text" name="verify" value=""><br/>

    <!--1 原始方法-->
    <!--
    <img src="/xl/index.php/Admin/Public/verify" onclick="this.src = this.src+'?'+Math.random() " name=""/>
    -->

    <!--2 动态生成URL-->
    <!-- 切记加随机数的工作应该由前端js来完成-->
    <img src="<?php echo U('Admin/Public/verify');?>" onclick="this.src = this.src+'?'+Math.random() "/>
    

    <!--3 扩展标签法-->
    <!--
    
    <img src="<?php echo U('Admin/Public/verify',array('w'=>60,'h'=>70));?>" onclick="this.src = this.src+'?'+Math.random() "/>
    -->
    

<p><input type="submit" value="登陆">
<a href="<?php echo U('Login/register');?>">注册</a>
</p>
</form>
</body>