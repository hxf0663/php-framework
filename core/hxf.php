<?php
namespace core;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class hxf
{
	public $assign;
	static public function run(){
		//原生日志类
		\core\lib\log::init();
		\core\lib\log::log('test');
		\core\lib\log::log($_SERVER,'server');
		//Monolog日志类：https://github.com/Seldaek/monolog
		$log = new Logger('name');
		$log->pushHandler(new StreamHandler('log/monolog.log', Logger::WARNING));
		$log->addWarning('Foo');
		$log->addError('Bar');
		//调用路由类解析控制器与方法
		$route = new \core\lib\route();
		$ctrlClass = $route->ctrl;
		$action = $route->action;
		$ctrlFile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
		$ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
		if(is_file($ctrlFile)){
			include $ctrlFile;
			$ctrl = new $ctrlClass();
			$ctrl->$action();
		}else{
			throw new \Exception('找不到控制器'.$ctrlFile);

		}
	}

	static public function load($class){
		$class = str_replace('\\','/',$class);
		$file = HXF . '/' . $class . '.php';
		if(is_file($file)){
			include $file;
		}else{
			return false;
		}
	}

	public function assign($name, $value)
	{
		$this->assign[$name] = $value;
	}

	public function display($file)
	{
		$viewFile = APP.'/view/'.$file;
		if(is_file($viewFile)){
			/* 原生视图：<?php echo $para ?>引用 */
			// extract($this->assign);
			// include $viewFile;

			// twig模板引擎：https://twig.sensiolabs.org
			\Twig_Autoloader::register();
			$loader = new \Twig_Loader_Filesystem(APP.'/view/');
			$twig = new \Twig_Environment($loader, array(
			    'cache' => HXF.'/cache',
			));
			$template = $twig->load($file);
			$template->display($this->assign?$this->assign:array());
		}
	}
}