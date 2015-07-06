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
	public function nav(){
		$module = I("id");
		dump($module);
	}

	public function index() {
		$categoryService = D("Core/Category");
		$nav = $categoryService->getNavByParent("-1");
		$theme = $categoryService -> getNavByParent("1");
		$this->assign("nav", $nav);
		$this->assign("theme",$theme);
		dump($nav);
		$this->assign("subName", $nav[0]["name"]);
		$this->assign("info", "selected");
		$this->assign("page", "信息管理");

		$this->display("Infomation/Main");
	}
	public function user() {
		$login = A("Login");
		$login->init();
	}

	public function addLines(){
		$lines = A("Lines");
		$lines -> init();
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