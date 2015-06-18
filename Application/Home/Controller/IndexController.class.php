<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		dump(session('?name'));
		$isSession = session('?name');
		if ($isSession) {
			echo "logined";
		} else {
			$loginController = A("Login");
			$loginController->init();
		}

	}
}