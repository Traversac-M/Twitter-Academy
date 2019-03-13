<?php

class Database {
	public static $database;
	private static $dbHost = 'localhost';
	private static $dbName = 'common-database';
	private static $dbUser = 'root';
	private static $dbPass = '';

	public static function connexion(){

			$database = new PDO('mysql:host='.self::$dbHost.';dbname='.self::$dbName, self::$dbUser, self::$dbPass);
			$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$database = $database;
	}
}

$test = new Database();
$test->connexion();
