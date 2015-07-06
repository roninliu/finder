<layout name="Layout/MainLayout" />
<div class="model info">
	<div class="model-hd">
		<h1 class="model-hd-title">{$subName}</h1>
	</div>
	<div class="model-bd">
		<div class="filter">
			<ul class="vform">
				<li><label for="" class="form-title">自驾线路名称：</label><label for="" class="form-content"><input type="text" placeholder="请输入自驾线路名称"></label></li>
				<li><label for="" class="form-title">选择自驾主题：</label><label for="" class="form-content"><select name="" id="">
					<volist name='theme' id='themeItem'>
    					<option value="{$themeItem.id}" data-parent="{$themeItem.c_id}">{$themeItem.name}</option>
					</volist>
				</select></label></li>
				<li><label for="" class="form-title">关键字搜索：</label><label for="" class="form-content"><input type="text" placeholder="请输入关键字"></label></li>
				<li><label for="" class="form-content"><a href="#" class="btn btn-primary">搜索</a></label></li>
			</ul>
		</div>
		
	</div>
</div>
<script>
	seajs.use("__ROOT__/Public/js/info", function(app) {
		app.init(1);
	})
</script>