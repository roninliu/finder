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
			<div class="menus">
	<div class="menu">
	<a href="/finder/index.php" class="menu-item <?php echo ($dashbord); ?>">Dashbord</a><a href="/finder/index.php/info" class="menu-item <?php echo ($info); ?>">信息管理</a><a href="/finder/index.php/user" class="menu-item <?php echo ($user); ?>">用户管理</a><a href="/finder/index.php/message" class="menu-item <?php echo ($message); ?>">消息中心</a><a href="/finder/index.php/myself" class="menu-item <?php echo ($myself); ?>">个人中心</a>
	</div>
	<div class="user">
		<span><i class="fa fa-user fa-fw"></i> 当前用户：<?php echo session('nickname'); ?></span> | <a href="/finder/index.php/logout" class="menu-item">退出系统</a>
	</div>
</div>
		</div>
	</div>
	<div class="container">
		<div class="inner">
			<div class="nav">
				<?php if($isDashbord): ?><div class="quick">快捷方式</div><?php endif; ?>
				<ul>
					<?php if($isDashbord): ?><li><a href="/finder/index.php">添加路线</a></li>
						<li><a href="/finder/index.php">添加主题</a></li>
						<li><a href="/finder/index.php">未读消息</a></li>
					<?php else: ?>
						<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navItem): $mod = ($i % 2 );++$i; if($i == 1): ?><li><a href="/finder/index.php/<?php echo ($module); ?>/categroy/id/<?php echo ($navItem["id"]); ?>" class="selected" data-id='<?php echo ($navItem["id"]); ?>' data-parent='<?php echo ($navItem["c_id"]); ?>'><?php echo ($navItem["name"]); ?></a></li>
						<?php else: ?>
							<li><a href="/finder/index.php/<?php echo ($module); ?>/categroy/id/<?php echo ($navItem["id"]); ?>" data-id='<?php echo ($navItem["id"]); ?>' data-parent='<?php echo ($navItem["c_id"]); ?>'><?php echo ($navItem["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
				</ul>
			</div>
			<div class="content" id="js_container">
			
<script src="/finder/Public/lib/jquery.dataTables.min.js"></script>
<div class="model info">
	<div class="model-hd">
		<?php if(session('isAdmin')): ?><div class="model-hd-tools">
			<a href="/finder/index.php/info/add/type/line/id/<?php echo ($current['id']); ?>" class="btn btn-primary">添加线路</a>
			<a href="/finder/index.php/info/add/type/categroy/id/<?php echo ($current['id']); ?>" class="btn btn-primary">添加主题</a>
		</div><?php endif; ?>
		<h1 class="model-hd-title"><?php echo ($current['name']); ?></h1>
	</div>
	<div class="model-bd">
		<div class="filter">
			<ul class="hform">
				<li><label for="" class="form-title">自驾主题：</label><label for="" class="form-content"><select name="" id="js_themeId">
					<option value="0">--全部--</option>
					<?php if(is_array($theme)): $i = 0; $__LIST__ = $theme;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$themeItem): $mod = ($i % 2 );++$i;?><option value="<?php echo ($themeItem["id"]); ?>" data-parent="<?php echo ($themeItem["c_id"]); ?>"><?php echo ($themeItem["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select></label></li>
				<li><label for="" class="form-title">关键字搜索：</label><label for="" class="form-content"><input type="text" placeholder="请输入关键字" id="js_key"></label></li>
				<li><label for="" class="form-content"><a href="javascript:;" class="btn btn-primary" id="js_search_btn">搜索</a></label></li>
			</ul>
		</div>
		<div class="result">
			<table id="js_linesList">
				<thead>
					<tr>
						<th>ID</th>
						<th>线路名称</th>
						<th>线路主题</th>
						<th>出发地</th>
						<th>目的地</th>
						<th>自驾车程</th>
						<th>自驾时长</th>
						<th>报名限额</th>
						<th>自驾费用</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	seajs.use("/finder/Public/js/info", function(app) {
		app.init(0);
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