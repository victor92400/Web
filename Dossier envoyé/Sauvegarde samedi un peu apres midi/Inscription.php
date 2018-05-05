<?php  
session_start();
 //require('db_connect.php');
$connection = mysqli_connect('127.0.0.1', 'root', '');
$select_db = mysqli_select_db($connection, 'piscine');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$user_mail = $_POST['user_mail'];
$user_nom = $_POST['user_nom'];
$user_prenom = $_POST['user_prenom'];
$user_sexe = $_POST['user_sexe'];
$user_naissance = $_POST['user_naissance'];
$user_statut = $_POST['user_statut'];
$user_adresse = $_POST['user_adresse'];
$user_couleur = $_POST['user_couleur'];

// CHECK FOR THE RECORD FROM TABLE
$query = "INSERT INTO utilisateur(Nom, Prenom, Email, Login, Mdp, Sexe, Naissance, Statut, Adresse, Couleur) 
        VALUES ('$user_nom','$user_prenom','$user_mail','$username','$password','$user_sexe','$user_naissance','$user_statut','$user_adresse','$user_couleur')";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

if($result){echo"inscription marche";}
else{echo"ta mere";}

//echo "<script type='text/javascript'>alert('You Are Subscribed')</script>";




$query2 = "SELECT * FROM utilisateur WHERE Login='$username' and Mdp='$password'";
 
$result2 = mysqli_query($connection, $query2) or die(mysqli_error($connection));
$count2 = mysqli_num_rows($result2);

    while($row2 = $result2->fetch_assoc()) { 

        $_SESSION["no_utilisateur_actuel"] = $row2["no_utilisateur"];
    }
    header('Location: index.php');



}
?>