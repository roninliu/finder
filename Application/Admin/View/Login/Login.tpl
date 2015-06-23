<layout name="Layout/SingleLayout" />

<div class="login">
	<h1>用户登录</h1>
	<ul>
		<li><label for="js_username">用户名：</label><input type="text" name="username" id="js_username"></li>
		<li><label for="js_password">密码：</label><input type="password" name="password" id="js_password"></li>
		<li><button id="js_login">登录</button></li>
	</ul>
</div>

<script>
	seajs.use("__ROOT__/Public/js/login", function(app) {
		app.init();
	})
</script>