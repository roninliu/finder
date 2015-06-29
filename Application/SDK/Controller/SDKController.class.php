<?php
namespace SDK\Controller;
use Think\Controller;

class SDKController extends Controller {

	public function doLogin() {
		$user = array(
			'account' => I("username"),
			'password' => I("password"),
		);
		$userService = D("Core/User");
		$result = $userService->findUser($user);
		$this->ajaxReturn($result);
	}

	public function getLinesByType() {
		$lineService = D("Core/Line");
		$type = I("type");

		$result = $lineService->findLinesByType($type);
		if ($result != null) {
			$json = array(
				'sEcho' => I("sEcho"),
				'iTotalRecords' => count($result),
				'iTotalDisplayRecords' => count($result),
				'aaData' => $result,
			);
			$this->ajaxReturn($json);
		}

	}
}