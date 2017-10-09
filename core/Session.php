<?php
namespace App\Core;

class Session
{
	public static function createSession($msgKey,$message)
	{
		ob_start();
		session_start();
		$_SESSION[$msgKey]=$message;
		ob_end_flush();
		
	}

	public static function getSession($msgKey)
	{
		return $_SESSION[$msgKey];
	}

	public static function unsetSession($msgKey)
	{
		unset($_SESSION[$msgKey]);
	}
}
?>