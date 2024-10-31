<?php

$hostname = "localhost";
$usernamewk = "root";
$passwordwk = "";
$database_name = "loginwk";

$db = mysqli_connect($hostname, $usernamewk, $passwordwk, $database_name);

if($db->connect_error) {
    echo "Connection failed: ";
    die("error!");
}

?>