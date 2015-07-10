<div class="menus">
	<div class="menu">
	<a href="__ROOT__/index.php" class="menu-item {$dashbord}">Dashbord</a><a href="__ROOT__/index.php/info" class="menu-item {$info}">信息管理</a><a href="__ROOT__/index.php/user" class="menu-item {$user}">用户管理</a><a href="__ROOT__/index.php/message" class="menu-item {$message}">消息中心</a><a href="__ROOT__/index.php/myself" class="menu-item {$myself}">个人中心</a>
	</div>
	<div class="user">
		<span><i class="fa fa-user fa-fw"></i> 当前用户：<php>echo session('nickname');</php></span> | <a href="__ROOT__/index.php/logout" class="menu-item">退出系统</a>
	</div>
</div>