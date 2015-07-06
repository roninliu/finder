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
					<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navItem): $mod = ($i % 2 );++$i; if($i == 1): ?><li><a href="/finder/index.php/nav/id/<?php echo ($navItem["id"]); ?>" class="selected" data-id='<?php echo ($navItem["id"]); ?>' data-parent='<?php echo ($navItem["c_id"]); ?>'><?php echo ($navItem["name"]); ?></a></li>
						<?php else: ?>
							<li><a href="/finder/index.php/nav/id/<?php echo ($navItem["id"]); ?>" data-id='<?php echo ($navItem["id"]); ?>' data-parent='<?php echo ($navItem["c_id"]); ?>'><?php echo ($navItem["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="content" id="js_container">
			
<div class="model info">
	<div class="model-hd">
		<h1 class="model-hd-title"><?php echo ($subName); ?></h1>
	</div>
	<div class="model-bd">
		<div class="filter">
			<ul class="vform">
				<li><label for="" class="form-title">自驾线路名称：</label><label for="" class="form-content"><input type="text" placeholder="请输入自驾线路名称"></label></li>
				<li><label for="" class="form-title">选择自驾主题：</label><label for="" class="form-content"><select name="" id="">
					<?php if(is_array($theme)): $i = 0; $__LIST__ = $theme;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$themeItem): $mod = ($i % 2 );++$i;?><option value="<?php echo ($themeItem["id"]); ?>" data-parent="<?php echo ($themeItem["c_id"]); ?>"><?php echo ($themeItem["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select></label></li>
				<li><label for="" class="form-title">关键字搜索：</label><label for="" class="form-content"><input type="text" placeholder="请输入关键字"></label></li>
				<li><label for="" class="form-content"><a href="#" class="btn btn-primary">搜索</a></label></li>
			</ul>
		</div>
		
	</div>
</div>
<script>
	seajs.use("/finder/Public/js/info", function(app) {
		app.init(1);
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