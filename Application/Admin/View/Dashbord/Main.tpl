<layout name="Layout/MainLayout" />

<h1>welcome!</h1>
<p>欢迎使用Finder in China管理控制平台。</p>
<script>
	seajs.use("__ROOT__/Public/js/login", function(app) {
		app.init();
	})
</script>