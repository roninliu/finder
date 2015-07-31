<layout name="Layout/MainLayout" />
<div class="model info">
	<div class="model-hd">
		<h1 class="model-hd-title">新建自驾线路</h1>
	</div>
	<div class="model-bd">
		<div class="vform">
			<ul>
				<li>
					<label for="" class="form-title">路线名称：</label>
					<label for="" class="form-content">
						<input type="text" placeholder="请输入关键字" class="w-700">
					</label>
				</li>
				<li>
					<label for="" class="form-title">自驾主题：</label>
					<label for="" class="form-content">
						<select name="" id="js_themeId" class="w-300">
							<option value="0">--全部--</option>
							<volist name='theme' id='themeItem'>
							<option value="{$themeItem.id}" data-parent="{$themeItem.c_id}">{$themeItem.name}</option>
							</volist>
						</select>
					</label>
				</li>
				<li>
					<label for="" class="form-title">出发城市：</label>
					<label for="" class="form-content">
						<select name="" id="js_province" class="w-150 js_province">
							<option value="0">--全部--</option>
						</select>
						<select name="" id="js_city" class="w-150 js_city">
							<option value="0">--全部--</option>
						</select>
					</label>
				</li>
				<li>
					<label for="" class="form-title">线路详情：</label>
					<label for="" class="form-content w-700">
						<textarea name="" id="js_editor" cols="30" rows="10">ceshi</textarea>
					</label>
				</li>
			</ul>
		</div>
	</div>
</div>
<script>
	seajs.use("__ROOT__/Public/js/info", function(app) {
		app.init(1);
	})
</script>