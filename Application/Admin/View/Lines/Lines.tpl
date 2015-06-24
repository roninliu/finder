<layout name="Layout/MainLayout" />
<script src="__ROOT__/Public/lib/jquery.dataTables.min.js"></script>
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
				<if condition="session('aid') lt 3 ">
				<div class="model-hd-tools">
					<a href="#" class="btn btn-primary">添加线路</a>
				</div>
				</if>
				<h1 class="model-hd-title">{$page}</h1>
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
	seajs.use("__ROOT__/Public/js/login", function(app) {
		app.init();
	})
</script>