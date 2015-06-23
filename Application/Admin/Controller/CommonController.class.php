<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
	public function _initialize() {
		$isSession = session('?skey');
		$IndexController = A("Index");
		if (!$isSession) {
			$IndexController->user();
		}
	}
}