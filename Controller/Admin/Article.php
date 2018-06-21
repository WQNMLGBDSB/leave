<?php
namespace Controller\Admin;

use Controller\Controller;
use Model\DB;
/**
 * 
 */
class Article extends Controller
{
	public function article_add()
	{
		$data = $_POST;
		$model = new DB();
		$res = $model->insert('article',$data);
		if ($res) {
			echo "<script>alert('添加成功');</script>";
        	// $this->display("");
		}else{
			echo "<script>alert('添加失败');</script>";
        	// $this->display("");
		}
	}
}

