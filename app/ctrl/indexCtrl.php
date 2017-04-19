<?php
namespace app\ctrl;
use app\model\cModel;

//类名跟文件名保持一致，类名跟方法名不同
class indexCtrl extends \core\hxf
{
	public function index(){

		//读取配置
		$temp = \core\lib\conf::get('CTRL','route');
		$temp = \core\lib\conf::get('ACTION','route');
		$temp = \core\lib\conf::all('route');
		p($temp);

		//模型
		// $model = new \core\lib\model();
		// $sql = "select * from c";
		// $ret = $model->query($sql);
		// p($ret->fetchAll());
		$model = new cModel();
		$data = $model->select('c','*');
		dump($data);
		$ret = $model->lists(['name','sort']);
		dump($ret);
		$ret = $model->getOne(2,'name');
		dump($ret);

		//视图
		$hello = 'Hello World';
		$this->assign('hello',$hello);
		$this->assign('data',$model->lists());
		$this->display('index.html');
	}
}