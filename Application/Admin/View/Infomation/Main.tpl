<layout name="Layout/MainLayout" />
<script src="__ROOT__/Public/lib/jquery.dataTables.min.js"></script>
<div class="model">
	<div class="model-hd">
		<if condition="session('aid') lt 3 ">
		<div class="model-hd-tools">
			<a href="#" class="btn btn-primary">添加线路</a>
		</div>
		</if>
		<h1 class="model-hd-title">{$subName}</h1>
	</div>
	<div class="model-bd">
		<div class="filter">111</div>
		<div class="result">
			<table id="js_linesList">
				<thead>
					<tr>
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
	seajs.use("__ROOT__/Public/js/info", function(app) {
		app.init(0);
	})
</script>