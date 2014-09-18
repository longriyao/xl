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

<form action="/xl/index.php/Admin/Category/addDo" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
    分类名称: <input type="text" name="name" value=""><br/>
    描　　述: <input type="text" name="description" value=""><br/>
    照　　片: <input type="file" name="pic" value=""><br/>

<p><input type="submit" value="Continue &rarr;"></p>

</form>
</body>