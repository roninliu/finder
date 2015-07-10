<layout name="Layout/MainLayout" />
<div class="model info">
	<div class="model-hd">
		<h1 class="model-hd-title" id="js_title" data-parentid="{$current.id}">新建自驾主题</h1>
	</div>
	<div class="model-bd">
		<div class="hform">
			<ul>
				<li><label for="" class="form-title">主题名称：</label><label for="" class="form-content"><input type="text"  id="js_category_name" class="w-150" placeholder="请输入主题名称"></label></li>
				<li><label for="" class="form-content"><a href="javascript:;" class="btn btn-primary" id="js_add_category_btn">确定</a></label></li>
			</ul>
		</div>
		<div class="categroy-list">
			<div class="list-title">已有主题</div>
			<div class="list-content">
				<ul id="js_theme_list">
					<li></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script>
	seajs.use("__ROOT__/Public/js/info.add.categroy", function(app) {
		app.init();
	})
</script>