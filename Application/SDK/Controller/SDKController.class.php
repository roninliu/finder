<?php
namespace SDK\Controller;
use Think\Controller;

class SDKController extends Controller {
	public function index() {
		$this->ajaxReturn("sss");
	}

	public function getUser() {
		$userService = D("Core/User");
		$result = $userService->findUser();
		$this->ajaxReturn($result);
	}

	public function doLogin() {
		$user = array(
			'account' => I("username"),
			'password' => I("password"),
		);
		$userService = D("Core/User");
		$result = $userService->findUser($user);
		$this->ajaxReturn($result);
	}
}