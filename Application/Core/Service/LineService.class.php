<?php
namespace Core\Service;
use Think\Model;

class LineService extends Model {
	public function findLinesByType($type) {
		$lineModel = M("Line");
		if ($type != null) {

		} else {
			$result = $lineModel->select();
			return $result;
		}

	}
}