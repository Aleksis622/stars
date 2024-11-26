<?php

$connection = new mysqli("localhost", "root","","sipols");//connect to database


$result =  $connection->query("SELECT * FROM users"); //izpilda pieprasijumu


$data = $result->fetch_assoc();// dabuj resultatu


var_dump($data);
echo "<br>";

echo "<pre>";

var_dump($_SERVER);

echo "</pre>";


if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST["username"];

    $password = $_POST["password"];

    $sql = "INSERT INTO users 
    (USERNAME,PASS)
    VALUES
    ('$username','$password')";

    $connection->query($sql);
}

echo "<form>";

echo "<form method='POST'>";

echo "  <label>Lietotajvards: <input name='username' placeholder='Lietotajvards'  /></label><br>"; 
 
echo "  <label>Parole:  <input type='password' name='password' placeholder='parole' /></label><br>";

echo"<input  type='submit' value='Registreties!' />";

echo "</form>";


//asociativais masivs
//$auglisAssoc=["color"=>"sarkans","type"=>"abols", "weight"=>"120"];
//print_r($auglisAssoc);

?>