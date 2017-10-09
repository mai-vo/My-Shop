<?php

class Connection
{
	public static function make($config)
	{
		ini_set('display_errors', true);
    	error_reporting(E_ALL);
		try{
			return new PDO (
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}
?>