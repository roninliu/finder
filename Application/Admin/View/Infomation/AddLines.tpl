<layout name="Layout/MainLayout" />
<div class="model info">
	<div class="model-hd">
		<h1 class="model-hd-title">新建自驾线路</h1>
	</div>
	<div class="model-bd">
		<div class="vform">
			<ul>
				<li><label for="" class="form-title">路线名称：</label><label for="" class="form-content"><input type="text" placeholder="请输入关键字"></label></li>
				<li><label for="" class="form-title">路线主题：</label><label for="" class="form-content"></label></li>
				<li><label for="" class="form-title">出发城市：</label><label for="" class="form-content"></label></li>
				<li><label for="" class="form-title">线路详情：</label><label for="" class="form-content"></label></li>
			</ul>
		</div>
	</div>
</div>
<script>
	seajs.use("__ROOT__/Public/js/info", function(app) {
		app.init(1);
	})
</script>