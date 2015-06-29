<?php
namespace Core\Service;
use Think\Model;

class UserService extends Model {

	public function findUser($user) {
		$userModel = M("User");
		$result = $userModel->where("account='" . $user['account'] . "'")->select();

		if ($result != null) {
			$isFlag = false;
			$loginUser = null;
			for ($i = 0; $i < count($result); $i++) {
				if ($user["password"] == $result[$i]["password"]) {
					$loginUser = $result[$i];
					$isFlag = true;
					break;
				} else {
					$isFlag = false;
				}
			}
			if ($isFlag) {
				if ($loginUser["enabled"] == 1) {
					return array(
						"code" => 1001,
						"msg" => "账户已过期！",
						'status' => "fail",
					);
				} else {
					$utils = new \Com\Utils\Utils();
					$status = $utils->setSession($loginUser);
					if ($status) {
						return array(
							"code" => 1003,
							"msg" => "登录成功！",
							'status' => "success",
						);
					} else {
						return array(
							"code" => 1005,
							'status' => "fail",
							"msg" => "服务器异常",
						);
					}
				}
			} else {
				return array(
					"code" => 1002,
					"msg" => "密码不正确!",
					'status' => "fail",
				);
			}
		} else {
			return array(
				"code" => 1000,
				"msg" => "用户不存在！",
				'status' => "fail",
			);
		}

		return $json;
	}
}