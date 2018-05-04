

<?php

session_start();

include("entete.php");
include("connexion.php");
if($no_utilisateur=$_POST["no_utilisateur_recherche"]){
    $no_utilisateur=$_POST["no_utilisateur_recherche"];
    echo $no_utilisateur;
}
else{
    $no_utilisateur = $_SESSION['no_utilisateur_actuel'];
}


/////// AFFICHER LE PROFIL AVEC LE TRUC DE VICTOR ////////////

$SQL="SELECT * FROM utilisateur WHERE no_utilisateur = $no_utilisateur";
$result = mysqli_query($db_handle, $SQL);
while($row = $result->fetch_assoc()) {   //affichage du resultat
    
    echo $row["Prenom"]. " " . $row["Nom"].
         "<br>" . $row["Email"]. 
         "<br> ID système : " . $row["no_utilisateur"] . 
         "<br> Date de naissance : " . $row["Naissance"] .
         "<br> Sexe : " . $row["Sexe"] . 
         "<br> Statut : " . $row["Statut"] .
         "<br> Adresse : " . $row["Adresse"] . 
         "<br> Couleur préférée : " . $row["Couleur"] .
         "<br><br> ";
///////////////////////////
}
mysqli_close($db_handle);

?>
