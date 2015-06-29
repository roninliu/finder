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
				<ul>
					<volist name='nav' id='navItem'>
						<if condition="$i eq 1">
							<li><a href="" class="selected" data-id='{$navItem.id}' data-parent='{$navItem.c_id}'>{$navItem.name}</a></li>
						<else/>
							<li><a href="" data-id='{$navItem.id}' data-parent='{$navItem.c_id}'>{$navItem.name}</a></li>
						</if>
					</volist>
				</ul>
			</div>
			<div class="content" id="js_container">
			{__CONTENT__}
			</div>
		</div>
	</div>
	<include file="Public/Footer" />