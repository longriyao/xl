<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>后台</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Author" content="" />
	</head>

	<frameset rows="61,*" cols="*" framespacing="0" frameborder="yes" border="1">
        <frame src="/xl/index.php/Admin/Index/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="200, *">
  			<frame src="/xl/index.php/Admin/Index/left" name="menu" noresize="noresize" scrolling="yes" />
  			<frame src="/xl/index.php/Admin/Index/right" name="main" noresize="noresize" scrolling="yes"/>
		</frameset>
	</frameset>
</html>