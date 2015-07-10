<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function init() {
		$this->display("Login/Login");
	}
}