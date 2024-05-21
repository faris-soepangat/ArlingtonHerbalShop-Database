<!--
Zahraa Hasan 1001550871
Faris Soepangat 1001374988
-->

<?php

class Database {

	public function getDatabaseConnection(){

		$dbHost = "localhost";
		$dbName = "ArlingtonHerbalShopDB";
		$dbUser = "root";
		$dbPassword = "";

		try {
			// PDO in PHP (PHP Data Objects)
			$dbConnection = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUser, $dbPassword);
			$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbConnection;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}