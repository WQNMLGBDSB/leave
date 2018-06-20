<?php
namespace Controller\Admin;
use Controller\Controller;
use Model\DB;
class UserController extends Controller
{
	public function index()
	{
		$this->display('Admin/login');
	}
	public function login_do()
	{
		$username = $_POST['username'];
		$userpawd = $_POST['userpawd'];
		$res = "select * from user where username = '$username'";
		if(!$res){
			echo "用户名不存在";
		}else{
			if($res['userpawd'] == $userpawd){
				echo "登录成功";
			}else{
				echo "密码错误";
			}
		}
	}
}
?>