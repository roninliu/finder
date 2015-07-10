<?php
namespace Core\Service;
use Think\Model;

class UserService extends Model {

	public function findUser($user) {
		$userModel = M("User");
		$result = $userModel->where("account='".$user["account"]."' and password='".$user["password"]."'")->find();
		if($result != null){
			if($result["enabled"] == 1){
				return array(
					'code' => 0,
					'status' => "fail",
					'msg' => "账户已经禁用，请联系管理员!" 
				);
			}else{
				$utils = new \Com\Utils\Utils();
				$storage = $utils->setStorage($result);
				if($storage){
					return array(
						'code' => 1,
						'status' => "success",
						'msg' => "登录成功!" 
					);
				}else{
					return array(
						'code' => 0,
						'status' => "fail",
						'msg' => "登录失败!" 
					);
				}
			}
		}else{
			return array(
				'code' => 0,
				'status' => "fail",
				'msg' => "用户名或密码错误!" 
			);
		}
	}
}