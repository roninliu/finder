<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
	/**
	 * [_initialize 拦截URL,防止未授权访问]
	 * @return [type] [description]
	 */
	public function _initialize() {
		if(!$this -> isLogin()){
			$loginController = A("Login");
			$loginController -> init();
			exit;
		}
	}
	/**
	 * [isLogin 获取session登录态]
	 * @return boolean
	 */
	public function isLogin(){
		$loginCookie = cookie("skey");
		$loginStatus = session("?skey");
		if(!$loginStatus){
			if($loginCookie != null){
				return true;
			}
			return false;
		}else{
			return true;
		}
	}
}