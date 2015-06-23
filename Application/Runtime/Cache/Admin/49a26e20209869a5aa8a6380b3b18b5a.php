<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="zh">
	<head>
		<meta http-equiv="X-UA-Compatible" content="edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="/finder/favicon.ico"/>
		<link rel="icon" href="/finder/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/finder/favicon.ico" type="image/x-icon" />
		<title>Finder in China</title>
		<link rel="stylesheet" type="text/css" href="/finder/Public/css/style.css">
		<script src="/finder/Public/lib/jquery-2.1.0.min.js"></script>
		<script src="/finder/Public/lib/sea.js"></script>
	</head>
	
<body class="single-layout">
<div class="inner">
	

<div class="login">
	<h1>用户登录</h1>
	<ul>
		<li><label for="js_username">用户名：</label><input type="text" name="username" id="js_username"></li>
		<li><label for="js_password">密码：</label><input type="password" name="password" id="js_password"></li>
		<li><button id="js_login">登录</button></li>
	</ul>
</div>

<script>
	seajs.use("/finder/Public/js/login", function(app) {
		app.init();
	})
</script>
</div>
</body>
</html>