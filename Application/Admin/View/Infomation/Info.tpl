<layout name="Layout/MainLayout" />
<script src="__ROOT__/Public/lib/jquery.dataTables.min.js"></script>
<div class="model info">
	<div class="model-hd">
		<if condition="session('isAdmin')">
		<div class="model-hd-tools">
			<a href="__ROOT__/index.php/info/add/type/line/id/{$current['id']}" class="btn btn-primary">添加线路</a>
			<a href="__ROOT__/index.php/info/add/type/categroy/id/{$current['id']}" class="btn btn-primary">添加主题</a>
		</div>
		</if>
		<h1 class="model-hd-title">{$current['name']}</h1>
	</div>
	<div class="model-bd">
		<div class="filter">
			<ul class="hform">
				<li><label for="" class="form-title">自驾主题：</label><label for="" class="form-content"><select name="" id="">
					<volist name='theme' id='themeItem'>
    					<option value="{$themeItem.id}" data-parent="{$themeItem.c_id}">{$themeItem.name}</option>
					</volist>
				</select></label></li>
				<li><label for="" class="form-title">关键字搜索：</label><label for="" class="form-content"><input type="text" placeholder="请输入关键字"></label></li>
				<li><label for="" class="form-content"><a href="#" class="btn btn-primary">搜索</a></label></li>
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
	seajs.use("__ROOT__/Public/js/info", function(app) {
		app.init(0);
	})
</script>