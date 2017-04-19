<?php
/**
 * medoo数据库框架基类
 * http://medoo.in/
 */
namespace app\model;
use core\lib\conf;
use Medoo\Medoo;

class model extends Medoo
{
	function __construct()
	{
		$option = conf::all('database');
		parent::__construct($option);
	}
}