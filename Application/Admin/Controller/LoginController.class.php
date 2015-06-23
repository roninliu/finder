<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function init() {
		$userService = D("Core/User");
		$result = $userService->findUser();
		$this->display("Login/Login");
	}
}