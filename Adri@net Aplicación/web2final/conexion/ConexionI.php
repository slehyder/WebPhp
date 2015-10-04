<?php

class Conexion
{
	public static function db_connect()
	{
		$mysqli= new mysqli("localhost","adrianet_admin","admin");
		$mysqli->select_db("adrianet_admin");

		return $mysqli;
	}
}
?>