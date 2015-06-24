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
		$this->assign("dashbord", "selected");
		$this->display("Dashbord/Main");
	}
	public function user() {
		$login = A("Login");
		$login->init();
	}

	public function lines() {
		$this->assign("lines", "selected");
		$this->assign("page", "全部线路");
		$this->display("Lines/Lines");
	}

	public function team() {
		$this->assign("team", "selected");
		$this->display("Team/Team");
	}

	public function video() {
		$this->assign("video", "selected");
		$this->display("Video/Video");
	}

	public function myself() {
		$this->assign("myself", "selected");
		$this->display("Myself/Myself");
	}
}