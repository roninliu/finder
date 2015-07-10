<?php
namespace Admin\Controller;
use Think\Controller;

class InfoController extends CommonController {

	var $_MODULE_NAME_STRING = "info";

	public function index() {

		$this->assign("nav", $this->getCategroyByParent(1));
		$this->assign("theme", $this->getCategroyByParent(11));
		$this->assign("current", $this->getCategroyByParent(1)[0]);
		$this->assign("info", "selected");
		$this->assign("page", "信息管理");
		$this->assign("module", $this->_MODULE_NAME_STRING);

		$this->display("Infomation/Info");
	}

	public function categroy() {
		$id = I("id");
		switch ($id) {
			case 11:
				$this->index();
				break;

			default:
				# code...
				break;
		}
	}

	public function add() {
		$id = I("id");
		$type = I("type");
		if ($type == "categroy") {
			switch ($id) {
				case 11:
					$this->addLineCategroy();
					break;

				default:
					# code...
					break;
			}
		} else {
			switch ($id) {
				case 11:
					$this->addLines();
					break;

				default:
					# code...
					break;
			}
		}
	}

	public function addLineCategroy() {
		$this->assign("nav", $this->getCategroyByParent(1));
		$this->assign("theme", $this->getCategroyByParent(11));
		$this->assign("current", $this->getCategroyByParent(1)[0]);
		$this->assign("info", "selected");
		$this->assign("page", "信息管理");
		$this->assign("module", $this->_MODULE_NAME_STRING);

		$this->display("Infomation/AddCategroy");
	}

	public function addLines() {
		$this->assign("nav", $this->getCategroyByParent(1));
		$this->assign("theme", $this->getCategroyByParent(11));
		$this->assign("current", $this->getCategroyByParent(1)[0]);
		$this->assign("info", "selected");
		$this->assign("page", "信息管理");
		$this->assign("module", $this->_MODULE_NAME_STRING);

		$this->display("Infomation/AddLines");
	}

	public function getCategroyByParent($parent) {
		$categoryService = D("Core/Category");
		$result = $categoryService->getNavByParent($parent);
		return $result;
	}

	// public function nav(){
	// 	$module = I("id");
	// 	dump($module);
	// }

	// public function index() {
	// 	$categoryService = D("Core/Category");
	// 	$nav = $categoryService->getNavByParent("-1");
	// 	$theme = $categoryService -> getNavByParent("1");
	// 	$this->assign("nav", $nav);
	// 	$this->assign("theme",$theme);
	// 	dump($nav);
	// 	$this->assign("subName", $nav[0]["name"]);
	// 	$this->assign("info", "selected");
	// 	$this->assign("page", "信息管理");

	// 	$this->display("Infomation/Main");
	// }
	// public function user() {
	// 	$login = A("Login");
	// 	$login->init();
	// }

	// public function addLines(){
	// 	$lines = A("Lines");
	// 	$lines -> init();
	// }

	// public function lines() {
	// 	$this->assign("lines", "selected");
	// 	$this->assign("page", "全部线路");
	// 	$this->display("Lines/Lines");
	// }

	// public function team() {
	// 	$this->assign("team", "selected");
	// 	$this->display("Team/Team");
	// }

	// public function video() {
	// 	$this->assign("video", "selected");
	// 	$this->display("Video/Video");
	// }

	// public function myself() {
	// 	$this->assign("myself", "selected");
	// 	$this->display("Myself/Myself");
	// }
}