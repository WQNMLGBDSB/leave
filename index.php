<?php
define('APP_HOST', $_SERVER['HTTP_HOST']);
$controller = isset($_GET['c']) ? ucfirst($_GET['c']) : 'UserController';
$action = isset($_GET['a']) ? $_GET['a'] : 'login';
$config = include('./Config/config.php');
include('./function.php');
include ('./Controller/Controller.php');
// use Controller\Controller;
					//前台
$controller = 'Controller\Admin\\'.$controller;
					// 后台
// $controller = 'Controller\Admin\\'.$controller;
// print_r($controller);die;
$obj = new $controller();
$obj->$action();