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
    	$username=$_POST['username'];
       	$userpawd=$_POST['userpawd'];
		$medel=new DB();
    	$sql=$medel->select('select * from user');
    	$sql=$sql[0];
       	if($sql['username']==$username){
       		if ($userpawd==$sql['userpawd']) {
        		$this->alert('登录成功','./?s=admin&c=Index&a=index');
    		} else {
       			$this->alert('密码错误','./?s=admin&c=User&a=login');
       		}
       	} else {
       		$this->alert('用户名不正确','./?s=admin&c=User&a=login');
       	}
	}
}
?>