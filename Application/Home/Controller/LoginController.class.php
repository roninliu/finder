<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function init() {
		$userService = D("Core/User");
		$result = $userService->findUser();
		dump($result);
		$this->display("Login/Login");
	}
}