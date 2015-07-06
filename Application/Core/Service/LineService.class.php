<?php
namespace Core\Service;
use Think\Model;

class LineService extends Model {
	public function findLinesByType($map) {
		$lineModel = M("Line");
		if ($map['type'] != null) {

		} else {
			$result = $lineModel->order($map["key"]." ". $map["sort"])->select();
			return $result;
		}

	}
}