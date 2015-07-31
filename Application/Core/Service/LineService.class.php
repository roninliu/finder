<?php
namespace Core\Service;
use Think\Model;

class LineService extends Model {
	public function findLinesByType($map) {
		$lineModel = M("Line");
		if ($map['type'] != 0) {
			$result = $lineModel->where('theme = ' . $map['type'] . ' and title like "%' . $map['keyword'] . '%" ')->order($map["key"] . " " . $map["sort"])->limit($map['iDisplayStart'], $map['iDisplayLength'])->select();
			$resultCount = $lineModel->where('theme = ' . $map['type'] . ' and title like "%' . $map['keyword'] . '%" ')->count();
			$resultArray = array(
				'length' => $resultCount,
				'data' => $result,
			);
			return $resultArray;
		} else {
			$result = $lineModel->where('title like "%' . $map['keyword'] . '%" ')->order($map["key"] . " " . $map["sort"])->limit($map['iDisplayStart'], $map['iDisplayLength'])->select();
			$resultCount = $lineModel->where('title like "%' . $map['keyword'] . '%" ')->count();
			$resultArray = array(
				'length' => $resultCount,
				'data' => $result,
			);
			return $resultArray;
		}

	}
}