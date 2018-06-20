<?php
namespace Controller;
class Controller
{
	public $assign;
	public function display($path)
	{
		include './view/'.$path.'.html';
		extract($this->assign);
	}

	public function assign($key, $value)
	{
		$this->assign[$key] = $value;
	}
}
