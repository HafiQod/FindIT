<?php

$hostname = "localhost";
$usernameND = "root";
$passwordND = "";
$database_name = "findit";

$db = mysqli_connect($hostname, $usernameND, $passwordND, $database_name);

if($db->connect_error) {
    echo "Connection failed: ";
    die("error!");
}

?>