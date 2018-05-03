<?php

$user = "root";
$pass = "";
$db = "piscine";
$server = "127.0.0.1";

$db_handle = mysqli_connect($server, $user, $pass); 
$db_found = mysqli_select_db($db_handle, $db);
if (!$db_found) {
    echo"Database not found !";
    die('Could not connect: ' . mysql_error());
}

?>