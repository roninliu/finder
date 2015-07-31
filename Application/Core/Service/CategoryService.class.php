<?php
namespace Core\Service;
use Think\Model;

class CategoryService extends Model {

	public function getNavByParent($parent) {
		$categoryModel = M("Category");
		$result = $categoryModel->where('c_id ="' . $parent . '"')->select();
		return $result;
	}

	public function addInfoCategory($category) {
		$categoryModel = M("Category");
		$data["name"] = $category['name'];
		$data['c_id'] = $category['parent'];
		$data['is_main'] = 0;
		$result = $categoryModel->add($data);
		return $result;
	}
}