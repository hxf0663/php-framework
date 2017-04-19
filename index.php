<?php
/**
 * 框架入口文件
 */

//定义常量
define('HXF', realpath('./'));
define('CORE', HXF.'/core');
define('APP', HXF.'/app');
define('MODULE', 'app');

include "vendor/autoload.php";//composer自动加载类库

define('DEBUG', true);

if(DEBUG){
	//错误展示类：https://github.com/filp/whoops
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	//变量输出类：https://github.com/symfony/var-dumper
	// dump($_SERVER);
	ini_set('display_errors', 'On');
}else{
	ini_set('display_errors', 'Off');
}

include CORE.'/common/function.php';//加载函数库

include CORE.'/hxf.php';//加载框架核心文件基类

spl_autoload_register('\core\hxf::load');//自动加载类

\core\hxf::run();//启动框架