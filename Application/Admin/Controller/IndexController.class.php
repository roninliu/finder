<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends CommonController {

	public function index() {
		$this->assign("dashbord", "selected");
		$this->assign("page", "Dashbord");
		$this->assign("isDashbord", true);
		$this->display("Dashbord/Main");
	}
}