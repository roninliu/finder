{/* 布局模版 */ }
<include file="Public/Header" />
<body class="main-layout">
	<div class="header">
		<div class="inner">
			<div class="logo">Finder in China</div>
			<div class="menu">
				<a href="__ROOT__/index.php/lines" class="menu-item">路线</a>
				<a href="" class="menu-item">领队</a>
				<a href="" class="menu-item">影像</a>
				<a href="" class="menu-item">我的</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="inner">
			<div class="content">{__CONTENT__}</div>
		</div>
	</div>
<include file="Public/Footer" />