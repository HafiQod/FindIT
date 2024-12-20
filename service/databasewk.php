<?php

$hostname = "localhost";
$usernameWK = "root";
$passwordWK = "";
$database_name = "findit";

$db = mysqli_connect($hostname, $usernameWK, $passwordWK, $database_name);

if($db->connect_error) {
    echo "Connection failed: ";
    die("error!");
}

?>