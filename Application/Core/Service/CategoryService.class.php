<?php
namespace Core\Service;
use Think\Model;

class CategoryService extends Model {

	public function getNavByParent($parent){
		$categoryModel = M("Category");
		$result = $categoryModel -> where('c_id ="'.$parent.'"') -> select();
		return $result;
	}
}