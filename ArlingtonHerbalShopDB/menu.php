<!--
Zahraa Hasan 1001550871
Faris Soepangat 1001374988
-->

<?php

if ($_POST['choice']) {
	// print ($_POST['choice']);
    $option=$_POST['choice'];
    switch ($option) {
        case 1: 
            include 'index.php';
            break;
        case 2:
            header( "Location: http://localhost/ArlingtonHerbalShopDB/addItem.php");
            break;
        case 3:
            header( "Location: http://localhost/ArlingtonHerbalShopDB/updateItem.php");
            break;
        case 4:
            header( "Location: http://localhost/ArlingtonHerbalShopDB/deleteItem.php");
            break;
        case 5:
            exit;
    }
}
else {
	echo <<<END
    1. Select <br>
    2. Insert <br>
    3. Update <br>
    4. Delete <br>
    5. Exit <br>
    END;
    echo <<<_HTML_
	<FORM method="post"> 
	Enter your choice: <input type="number" name="choice" min="1" max="5">
	<BR>
	<INPUT type="submit" value="SUBMIT">
	</FORM>
	_HTML_;
}
?>
