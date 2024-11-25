<?php

$connection = new mysqli("localhost", "root","","sipols");//connect to database


$result =  $connection->query("SELECT * FROM users"); //izpilda pieprasijumu


$data = $result->fetch_assoc();// dabuj resultatu


var_dump($data);

echo "<form>";
echo "<form/>";

?>