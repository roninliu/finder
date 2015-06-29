{/* 布局模版 */ }
<include file="Public/Header" />
<body class="main-layout">
	<div class="header" id="js_header">
		<div class="inner">
			<div class="logo">Finder in China</div>
			<div class="page-name"><i class="fa fa-align-justify fa-fw"></i>用户管理</div>
			<include file="Public/Menu"/>
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
			{__CONTENT__}
			</div>
		</div>
	</div>
	<include file="Public/Footer" />