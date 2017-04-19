<?php
namespace app\model;
use app\model\model;

class cModel extends model
{
	public $table = 'c';
	public function lists($field='*'){
		$ret = $this->select($this->table,$field);
		return $ret;
	}
	public function getOne($id,$field='*'){
		$ret = $this->get($this->table,$field,array(
			'id'=>$id
		));
		return $ret;
	}
}