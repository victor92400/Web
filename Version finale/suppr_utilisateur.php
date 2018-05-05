<?php  
echo"Bonjour";
 session_start();

 $connection = mysqli_connect('localhost', 'root', 'root');
 $select_db = mysqli_select_db($connection, 'piscine');

 echo"Bonjour";

$boo = $_SESSION["bob"];
echo"$boo";
  $SQL = "DELETE FROM utilisateur WHERE no_utilisateur='$boo'";
 $result = mysqli_query($connection, $SQL) or die(mysqli_error($connection));
 
header('Location: index.php');
              
?>