<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
	public function _initialize() {
		$isSession = session('?skey');
		$IndexController = A("Index");
		if (!$isSession) {
			echo "未登录态";
			$IndexController->user();
		}
	}
}