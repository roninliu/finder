<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {

	public function _before_index() {
		$isSession = session('?skey');
		if (!$isSession) {
			$this->user();
			exit;
		}
	}

	public function index() {
		$this->display("Dashbord/Main");
	}
	public function user() {
		$login = A("Login");
		$login->init();
	}

	public function lines() {
		echo "line";
	}
}