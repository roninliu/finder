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
			<div class="page-name"><i class="fa fa-align-justify fa-fw"></i><?php echo ($page); ?></div>
			<div class="menu">
	<a href="/finder/index.php" class="menu-item <?php echo ($info); ?>">信息管理</a><a href="/finder/index.php/lines" class="menu-item <?php echo ($user); ?>">用户管理</a><a href="/finder/index.php/team" class="menu-item <?php echo ($message); ?>">消息中心</a><a href="/finder/index.php/video" class="menu-item <?php echo ($myself); ?>">个人中心</a><a href="/finder/index.php/myself" class="menu-item">退出系统</a>
</div>
		</div>
	</div>
	<div class="container">
		<div class="inner">
			<?php if(session('?skey')): ?><div class="userinfo">
					当前用户：<?php echo session('nickname'); ?>
				</div><?php endif; ?>
			<div class="nav">
				<ul>
					<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navItem): $mod = ($i % 2 );++$i; if($i == 1): ?><li><a href="" class="selected" data-id='<?php echo ($navItem["id"]); ?>' data-parent='<?php echo ($navItem["c_id"]); ?>'><?php echo ($navItem["name"]); ?></a></li>
						<?php else: ?>
							<li><a href="" data-id='<?php echo ($navItem["id"]); ?>' data-parent='<?php echo ($navItem["c_id"]); ?>'><?php echo ($navItem["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="content" id="js_container">
			
<script src="/finder/Public/lib/jquery.dataTables.min.js"></script>

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
					<table id="js_linesList">
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
	seajs.use("/finder/Public/js/lines", function(app) {
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