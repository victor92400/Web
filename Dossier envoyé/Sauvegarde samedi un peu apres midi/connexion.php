<?php

$user = "root";
$pass = "";
$db = "piscine";
$server = "localhost";

$db_handle = mysqli_connect($server, $user, $pass); 
$db_found = mysqli_select_db($db_handle, $db);

if (!$db_found) {
    echo"Database not found !";
    die('Could not connect: ' . mysql_error());
}

?>