<?php
define('APP_HOST', $_SERVER['HTTP_HOST']);
$controller = isset($_GET['c']) ? ucfirst($_GET['c']) : 'IndexController';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$config = include('./Config/config.php');
include('./function.php');
use Controller\Controller;
					//前台
$controller = 'Controller\Home\\'.$controller;
					// 后台
// $controller = 'Controller\Admin\\'.$controller;
// print_r($controller);die;
$obj = new $controller();
$obj->$action();