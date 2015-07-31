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
		$keyword = I("keyword");
		if ($keyword == "") {
			$param = array(
				'type' => $type,
				'key' => $sortKey,
				'sort' => $sortType,
				'keyword' => null,
				'iDisplayStart' => I("iDisplayStart"),
				'iDisplayLength' => I('iDisplayLength'),
			);
		} else {
			$param = array(
				'type' => $type,
				'key' => $sortKey,
				'sort' => $sortType,
				'keyword' => $keyword,
				'iDisplayStart' => I("iDisplayStart"),
				'iDisplayLength' => I('iDisplayLength'),
			);
		}

		$result = $lineService->findLinesByType($param);
		if ($result != null) {
			$json = array(
				'code' => 0,
				'msg' => "成功",
				'data' => array(
					'sEcho' => I("sEcho"),
					'iTotalRecords' => $result["length"],
					'iTotalDisplayRecords' => $result["length"],
					'aaData' => $result['data'],
				),
			);
			$this->ajaxReturn($json);
		} else {
			$json = array(
				'code' => 1,
				'msg' => "失败",
				'data' => array(),
			);
			$this->ajaxReturn($json);
		}

	}

	public function getCategroyListByParent() {
		$parent = I("parent");
		$categroyService = D("Core/Category");
		$result = $categroyService->getNavByParent($parent);

		if ($result != null && count($result) != 0) {
			$json = array(
				'code' => 1,
				'msg' => '操作成功',
				'data' => $result,
			);
			$this->ajaxReturn($json);
		} else {
			$json = array(
				'code' => 0,
				'msg' => '操作失败',
				'data' => array(),
			);
			$this->ajaxReturn($json);
		}
	}

	public function addInfoCategory() {
		$map = array(
			'parent' => I("parentid"),
			'name' => I('name'),
		);
		$categroyService = D("Core/Category");

		$result = $categroyService->addInfoCategory($map);
		if (!$result) {
			$json = array(
				'code' => 1,
				'msg' => '主题添加失败',
				'data' => $result,
			);
			$this->ajaxReturn($json);
		} else {
			$json = array(
				'code' => 0,
				'msg' => '添加成功',
				'data' => '',
			);
			$this->ajaxReturn($json);
		}

	}

	private function getSortKey($sort) {
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