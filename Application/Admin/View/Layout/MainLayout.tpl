{/* 布局模版 */ }
<include file="Public/Header" />
<body class="main-layout">
	<div class="header" id="js_header">
		<div class="inner">
			<div class="logo">Finder in China</div>
			<div class="page-name"><i class="fa fa-align-justify fa-fw"></i>{$page}</div>
			<include file="Public/Menu"/>
		</div>
	</div>
	<div class="container">
		<div class="inner">
			<div class="nav">
				<if condition="$isDashbord">
					<div class="quick">快捷方式</div>
				</if>
				<ul>
					<if condition="$isDashbord">
						<li><a href="__ROOT__/index.php">添加路线</a></li>
						<li><a href="__ROOT__/index.php">添加主题</a></li>
						<li><a href="__ROOT__/index.php">未读消息</a></li>
					<else/>
						<volist name='nav' id='navItem'>
						<if condition="$i eq 1">
							<li><a href="__ROOT__/index.php/{$module}/categroy/id/{$navItem.id}" class="selected" data-id='{$navItem.id}' data-parent='{$navItem.c_id}'>{$navItem.name}</a></li>
						<else/>
							<li><a href="__ROOT__/index.php/{$module}/categroy/id/{$navItem.id}" data-id='{$navItem.id}' data-parent='{$navItem.c_id}'>{$navItem.name}</a></li>
						</if>
					</volist>
					</if>
				</ul>
			</div>
			<div class="content" id="js_container">
			{__CONTENT__}
			</div>
		</div>
	</div>
	<include file="Public/Footer" />