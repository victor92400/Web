<?php  
session_start();
 //require('db_connect.php');
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'piscine');


if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
//$_SESSION["user_id"] = $username;

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM utilisateur WHERE Login='$username' and Mdp='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
    while($row = $result->fetch_assoc()) { 
        echo "Vous êtes connecté en tant que " .$row["Prenom"]. " " . $row["Nom"]. "<br>";
        $_SESSION["no_utilisateur_actuel"] = $row["no_utilisateur"];

    }
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

header("Location: index.php");

}else{
 
 echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
 echo"Vous semblez ne pas être inscrit, Appuyez sur precedent pour revenir";
}
}
?>