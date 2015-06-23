<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {

	public function index() {
		$this->user();

	}
	public function user() {
		$login = A("Login");
		$login->init();
	}
}