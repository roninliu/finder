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
			<div class="menu">
				<a href="/finder/index.php" class="menu-item <?php echo ($dashbord); ?>">DashBord</a><a href="/finder/index.php/lines" class="menu-item <?php echo ($lines); ?>">路线</a><a href="/finder/index.php/team" class="menu-item <?php echo ($team); ?>">领队</a><a href="/finder/index.php/video" class="menu-item <?php echo ($video); ?>">影像</a><a href="/finder/index.php/myself" class="menu-item <?php echo ($myself); ?>">我的</a>
			</div>
		</div>
	</div>
	<div class="container" id="js_container">
		<div class="inner">
			
<script src="/finder/Public/lib/jquery.dataTables.min.js"></script>
<div class="nav">
	<ul>
		<li><a href="">全部线路</a></li>
		<li><a href="">欢乐休闲</a></li>
		<li><a href="">运动拓展</a></li>
		<li><a href="">文化探访</a></li>
		<li><a href="">游学习休</a></li>
	</ul>
</div>
<div class="content">
	<div class="main">
		<div class="model">
			<div class="model-hd">
				<?php if(session('aid') < 3 ): ?><div class="model-hd-tools">
					<a href="#" class="btn btn-primary">添加线路</a>
				</div><?php endif; ?>
				<h1 class="model-hd-title"><?php echo ($page); ?></h1>
			</div>
			<div class="model-bd">
				<div class="filter">111</div>
				<div class="result">
					<table>
						<thead>
							<tr>
								<th>产品名称</th>
								<th>简介</th>
								<th>产品类型</th>
								<th>创建者</th>
								<th>创建时间</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	seajs.use("/finder/Public/js/login", function(app) {
		app.init();
	})
</script>
		</div>
	</div>
<div class="footer" id="js_footer">Finder in China</div>
</body>
</html>