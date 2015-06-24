{/* 布局模版 */ }
<include file="Public/Header" />
<body class="main-layout">
	<div class="header" id="js_header">
		<div class="inner">
			<div class="logo">Finder in China</div>
			<div class="menu">
				<a href="__ROOT__/index.php" class="menu-item {$dashbord}">DashBord</a><a href="__ROOT__/index.php/lines" class="menu-item {$lines}">路线</a><a href="__ROOT__/index.php/team" class="menu-item {$team}">领队</a><a href="__ROOT__/index.php/video" class="menu-item {$video}">影像</a><a href="__ROOT__/index.php/myself" class="menu-item {$myself}">我的</a>
			</div>
		</div>
	</div>
	<div class="container" id="js_container">
		<div class="inner">
			{__CONTENT__}
		</div>
	</div>
<include file="Public/Footer" />