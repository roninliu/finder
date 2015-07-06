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
		$sortKey = $this->getSortKey(I("iSortCol_0"));
		$sortType = I("sSortDir_0");
		$param = array(
			'type' => $type,
			'key' => $sortKey,
			'sort' =>$sortType
		);
		$result = $lineService->findLinesByType($param);
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

	private function getSortKey($sort){
		$keyList = array(
			'0' => "id",
			'1' => "title",
			'2' => "theme",
			'3' => "start",
			'4' => "end",
			'5' => "distance",
			'6' => "places",
			'7' => "leader",
			'8' => "price",
		);
		return $keyList[$sort];
		
	}
}