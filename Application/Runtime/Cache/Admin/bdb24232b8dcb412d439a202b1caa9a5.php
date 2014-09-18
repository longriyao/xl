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

welcome <a href=""><?php echo (session('username')); ?><a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Admin/Login/logoutDo');?>" target="_top">退出</a>