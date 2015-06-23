<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends CommonController {
	public function index() {
		echo "用户模块";
		$value = cookie();
		$utils = new \Com\Utils\Utils();
		dump($utils->authcode(cookie("skey"), "DECODE", "SKEY"));
		dump($value);
	}
}