<?php
namespace Admin\Controller;
use Think\Controller;

class LinesController extends CommonController {


	public function init(){
		$categoryService = D("Core/Category");
		$nav = $categoryService->getNavByParent("-1");
		$theme = $categoryService -> getNavByParent("1");
		$this->assign("nav", $nav);
		$this->assign("theme",$theme);
		$this->assign("subName", "添加新线路");
		$this->assign("info", "selected");
		$this->assign("page", "信息管理");

		$this->display("Infomation/AddLines");
	}

	public function index() {
		
		


		echo "用户模块";
		$value = cookie();
		$utils = new \Com\Utils\Utils();
		dump($utils->authcode(cookie("skey"), "DECODE", "SKEY"));
		dump($value);
	}
}