<?php
namespace core\lib;
use core\lib\conf;

class log
{
	static $class;
	static public function init(){
		//确定日志储存方式
		$drive = conf::get('DRIVE','log');
		$class = '\core\lib\drive\log\\'.$drive;
		self::$class = new $class;
	}
	static public function log($message,$file='log'){
		self::$class->log($message,$file);
	}
}