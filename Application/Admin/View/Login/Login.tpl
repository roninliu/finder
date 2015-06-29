<layout name="Layout/SingleLayout" />

<div class="login">
	<h1>用户登录</h1>
	<ul>
		<li><label for="js_username">账户：</label><input type="text" name="username" id="js_username" placeholder="请输入用户帐号"></li>
		<li><label for="js_password">密码：</label><input type="password" name="password" id="js_password" placeholder="请输入用户密码"></li>
		<li><button id="js_login" type="button">登录</button></li>
	</ul>
</div>

<script>
	seajs.use("__ROOT__/Public/js/login", function(app) {
		app.init();
	})
</script>