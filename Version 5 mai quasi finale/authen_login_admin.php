<?php  
session_start();
 //require('db_connect.php');
$connection = mysqli_connect('localhost', 'root', 'root');
$select_db = mysqli_select_db($connection, 'piscine');


if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$_SESSION["user_id"] = $username;

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM utilisateur WHERE Login='$username' and Mdp='$password' and Admin=1";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

header("Location: index_admin.php");

}else{
 
 echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
 echo"Vous semblez ne pas être un administrateur, Appuyez sur precedent pour revenir";
}
}
?>