<?php
namespace app\eye_admin\model;
use think\Model;
class Images extends Model{
	function getall(){
		$items =$this->alias("i")->field("i.image,i.id")->order('id desc')->select();
	return $items;
	}
	
}