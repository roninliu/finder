<?php
namespace Core\Service;
use Think\Model;

class UserService extends Model {

	public function findUser($user) {
		$userModel = M("User");
		$result = $userModel->where("account='" . $user['account'] . "'")->select();
		$json = array(
			'code' => 0,
			'msg' => '',
			'status' => '',
			'data' => '',
		);
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
					$json["code"] = 1001;
					$json["msg"] = "账户已过期！";
					$json['status'] = "fail";
				} else {
					$utils = new \Com\Utils\Utils();
					$status = $utils->setSession($loginUser);
					if ($status) {
						$json["code"] = 1003;
						$json['status'] = "success";
						$json["msg"] = "登录成功";
					} else {
						$json = array(
							"code" => 1005,
							'status' => "fail",
							"msg" => "服务器异常",
						);
					}
				}
			} else {
				$json["code"] = 1002;
				$json["msg"] = "密码不正确";
				$json['status'] = "fail";
			}
		} else {
			$json["code"] = 1000;
			$json["msg"] = "用户不存在！";
			$json['status'] = "fail";
		}

		return $json;
	}
}