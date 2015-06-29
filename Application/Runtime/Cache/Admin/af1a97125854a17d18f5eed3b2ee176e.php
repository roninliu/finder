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
	
<body class="main-layout">
	<div class="header" id="js_header">
		<div class="inner">
			<div class="logo">Finder in China</div>
			<div class="page-name"><i class="fa fa-align-justify fa-fw"></i>用户管理</div>
			<div class="menu">
	<a href="/finder/index.php" class="menu-item <?php echo ($dashbord); ?>">信息管理</a><a href="/finder/index.php/lines" class="menu-item <?php echo ($lines); ?>">用户管理</a><a href="/finder/index.php/team" class="menu-item <?php echo ($team); ?>">消息中心</a><a href="/finder/index.php/video" class="menu-item <?php echo ($video); ?>">个人中心</a><a href="/finder/index.php/myself" class="menu-item <?php echo ($myself); ?>">退出系统</a>
</div>
		</div>
	</div>
	<div class="container" id="js_container">
		<div class="inner">
			<div class="nav">
				<ul>
					<li><a class="selected" href="">自驾路线</a></li>
					<li><a href="">领队信息</a></li>
					<li><a href="">影像信息</a></li>
				</ul>
			</div>
			<div class="content">
			

<h1>welcome!</h1>
<p>欢迎使用Finder in China管理控制平台。</p>
<script>
	seajs.use("/finder/Public/js/login", function(app) {
		app.init();
	})
</script>
			</div>
		</div>
	</div>
	<div class="footer" id="js_footer">
	<p>Finder In China</p>
	<p>版权所有</p>
</div>
</body>
</html>