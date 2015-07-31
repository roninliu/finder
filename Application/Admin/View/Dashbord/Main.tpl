<layout name="Layout/MainLayout" />
<div class="dashbord">欢迎管理员:<php>echo session('nickname')</php></div>
<script>
	seajs.use("__ROOT__/Public/js/dashbord", function(app) {
		app.init(0);
	})
</script>