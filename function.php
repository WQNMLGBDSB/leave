<?php

function C($key)
{
	global $config;
	
	return $config[$key];
}

function __autoload($className)
{
	include './'.$className.'.php';
}

// function url($controller, $action, $param = [])
// {
// 	$url = APP_HOST.'/index.php?controller='.$controller.'&action='.$action;
// 	if(!empty($param)){
// 		foreach($param as $key => $val){
// 			$url .= '&'.$key.'='.$val;
// 		}
// 	}
	
// 	return $url;
// }
