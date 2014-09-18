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

<table border="1">
    <thead>
        <tr><th colspan='4'><?php echo ($title); ?></th></tr>
        <tr>
            <th>id</th> 
            <th>name</th> 
            <th>description</th> 
            <th>操作</th> 
        </tr>
    </thead>
    <tbody>
        <?php if(is_array($lists)): foreach($lists as $key=>$list): ?><tr>
            <td><?php echo ($list["id"]); ?></td>
            <td><?php echo ($list["name"]); ?></td>
            <td><?php echo ($list["description"]); ?></td>
            <td><a href="/xl/index.php/Admin/Category/edit/id/<?php echo ($list["id"]); ?>" title="">编辑</a>\<a href="/xl/index.php/Admin/Category/delDo/id/<?php echo ($list["id"]); ?>" title="">删除</a></td>
        </tr><?php endforeach; endif; ?>
    </tbody>
</table>
<?php echo ($page); ?>

</body>