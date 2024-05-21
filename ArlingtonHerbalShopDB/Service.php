<!--
Zahraa Hasan 1001550871
Faris Soepangat 1001374988
-->

<?php

require './Database.php';
require './Item.php';

class Service {

    function fetchAllItems() {
		
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

        $sql = "SELECT * FROM items";

		$stmt = $dbConnection->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Item');

		if ($stmt->execute()){
			return $stmt->fetchAll();
		} else{
			return 'Failed';
		}
	}

    function addItem() {
    	if (isset($_POST['exit'])) {
            header( "Location: http://localhost/ArlingtonHerbalShopDB/menu.php"); }
        $Iname = $_POST['Iname'];
        // $iId = $_POST['iId'];

        $dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

        // $sql = "INSERT INTO items (`Iname`,`iId`) VALUES (?,?)";
        $sql = "INSERT INTO items (`Iname`) VALUES (?)";
        
		$stmt = $dbConnection->prepare($sql);
        //var_dump($stmt);
        // echo $sql, "  Iname=", $Iname, " iId=", $iId;
        echo $sql, "  Iname=", $Iname;
        if ($stmt->execute([$Iname, $iId])) {
            // The primary key value will be auto-incremented by the database
        } else {
            return 'Failed';  
        }
    }

    function deleteItem() {
        if (isset($_POST['exit'])) {
            header( "Location: http://localhost/ArlingtonHerbalShopDB/menu.php"); }
        //$iId = $_POST['iId'];
        $Iname = $_POST['Iname'];

        $dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

        // $sql = "DELETE FROM items WHERE iId=" .$iId;
        $sql = "DELETE FROM items WHERE Iname=" .$Iname;

        echo $sql;
		$stmt = $dbConnection->query($sql);
        //echo "DELETED ITEM";
    }

    function updateItem() {
    	if (isset($_POST['exit'])) {
            header( "Location: http://localhost/ArlingtonHerbalShopDB/menu.php"); }
        // $iId = $_POST['iId'];
        $Iname = $_POST['Iname'];
        

        $dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

        // $sql = "UPDATE items SET name='" . $Iname ."',  WHERE iId=". $iId;
        $sql = "UPDATE items SET name='" . $Iname ."',  WHERE Iname=". $Iname;
        echo $sql;
        $stmt = $dbConnection->query($sql); 
    }
}

