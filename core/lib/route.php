<?php
namespace core\lib;
use core\lib\conf;

class route
{
	public $ctrl;
	public $action;
	public function __construct(){
		//linux环境根目录下读取，其它情况需再调整
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
			$path = $_SERVER['REQUEST_URI'];
			$patharr = explode('/',trim($path,'/'));
			if(isset($patharr[0])){
				$this->ctrl = $patharr[0];
			}
			unset($patharr[0]);
			if(isset($patharr[1])){
				$this->action = $patharr[1];
				unset($patharr[1]);
			}else{
				$this->action = conf::get('ACTION','route');
			}
			$count = count($patharr) + 2;
			$i = 2;
			while($i < $count){
				if(isset($patharr[$i+2])){
					$_GET[$patharr[$i]] = $patharr[$i+1];
				}
				$i+=2;
			}
		}else{
			$this->ctrl = conf::get('CTRL','route');
			$this->action = conf::get('ACTION','route');
		}
	}
}