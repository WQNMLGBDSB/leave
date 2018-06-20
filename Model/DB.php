<?php

namespace Model;

class DB
{
	public $pdo;

	public function __construct()
	{
		$db = C('db');
		$this->pdo = new \PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'], $db['username'], $db['password']);
	}

	public function add($table_name, $params)
	{
		$sql = 'insert into '.$table_name;

		$filed = '(';
		$value = ' values (';
		foreach($params as $key => $val){
			$filed .= $key.',';
			$value .= $val.',';
		}

		$sql .= trim($filed, ',').')'.trim($value, ',').')';

		return $this->pdo->exec($sql);
	}

	public function select($sql)
	{
		$result = $this->pdo->query($sql);
		return $result->fetchAll();
	}

	public function update()
	{

	}

	public function delete()
	{

	}
}