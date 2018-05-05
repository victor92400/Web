

<?php

session_start();


$no_utilisateur = $_SESSION['no_utilisateur_actuel'];

include("entete.php");
include("connexion.php");


echo "Vos nouvelles relations : <br> <br>";

$SQL="SELECT * FROM relations WHERE no_utilisateur1 = $no_utilisateur OR no_utilisateur2 = $no_utilisateur ";
$result = mysqli_query($db_handle, $SQL);
while($row = $result->fetch_assoc()) {   //affichage du resultat


    $no_utilisateur1= $row["no_utilisateur1"];
    $no_utilisateur2= $row["no_utilisateur2"];

    $SQL2="SELECT * FROM utilisateur WHERE (no_utilisateur = '$no_utilisateur1' OR no_utilisateur = '$no_utilisateur2') AND no_utilisateur != $no_utilisateur " ;

    $result2 = mysqli_query($db_handle, $SQL2);
    if(!$result2){echo"result2 pas marche";}

    while($row2 = $result2->fetch_assoc() ) {

            echo  $row2["Prenom"] . " " . $row2["Nom"] ."<br><br>";                        

        }                       

    }
    

mysqli_close($db_handle);

?>
