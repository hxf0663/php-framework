<?php
namespace core\lib\drive\log;
use core\lib\conf;

class file
{
	public $path;//日志存储位置
	public function __construct(){
		$conf = conf::get('OPTION','log');
		$this->path = $conf['PATH'];
	}
	public function log($message,$file='log'){
		if(!is_dir($this->path.date('Ymd'))){
			mkdir($this->path.date('Ymd'),0777,true);
		}
		return file_put_contents($this->path.date('Ymd').'/'.date('H').$file.'.log',date('Y-m-d H:i:s').' '.json_encode($message).PHP_EOL,FILE_APPEND);
	}
}