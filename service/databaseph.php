<?php

$hostname = "localhost";
$usernameph = "root";
$passwordph = "";
$database_name = "loginph";

$db = mysqli_connect($hostname, $usernameph, $passwordph, $database_name);

if($db->connect_error) {
    echo "Connection failed: ";
    die("error!");
}

?>