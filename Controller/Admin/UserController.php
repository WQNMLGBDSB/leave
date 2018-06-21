<?php
namespace Controller\Admin;

use Controller\Controller;
use Model\DB;

class UserController extends Controller
{
	public function login()
	{
		$this->display('Admin/login');
	}
	public function login_do()
	{
    $model=new DB();
    $username=$_POST['username'];
    $userpawd=$_POST['userpawd'];
    $sql=$model->select('select * from user');
    $sql=$sql[0];
     	if($sql['username']==$username){
     		if ($userpawd==$sql['userpawd']) {
       	  echo "<script>alert('登录成功');</script>";
          $this->display("Admin/index");
    	  } else {
     		  echo "<script>alert('密码错误');</script>";
          $this->display("Admin/login");
     		}
     	} else {
     		  echo "<script>alert('用户名不正确');</script>";
          $this->display("Admin/login");
     	}
	}
}
?>