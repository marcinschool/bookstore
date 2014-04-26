<?php

class Model {

	private $connection;

	public function __construct()
	{
		global $config;
		$this->connection = mysql_pconnect($config['db_host'], $config['db_username'], $config['db_password']);
		mysql_select_db($config['db_name'], $this->connection);
	}

	public function toInt($int)
	{
		return intval($int);
	}
	public function escapeString($string)
	{
		return mysql_real_escape_string($string);
	}

	public function query($query)
	{
		$result = mysql_query($query);
		$resultObjects = array();

		while($row = mysql_fetch_object($result))
		{
			$resultObjects[] = $row;
		}

		return $resultObjects;
	}

	public function execute($query)
	{
		$exec = mysql_query($query);
		return $exec;
	}
    
}
?>
