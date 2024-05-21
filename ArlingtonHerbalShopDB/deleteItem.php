<!--
Zahraa Hasan 1001550871
Faris Soepangat 1001374988
-->

<?php

require './Service.php';

$service = new Service();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $result = $service->deleteItem();
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Delete Item </title>
    </head>
    <body>
        <form method="post">
        <fieldset>
            <legend> Delete Item</legend>

            <input type="text" name="Iname" placeholder="Iname"></br> 

            <input id="button" type="submit" name="submit">
            <input id="button" type="submit" name="exit" value="exit">
        </fieldset>
        <!-- <?= htmlspecialchars($result); ?> -->
    </body>

</html>