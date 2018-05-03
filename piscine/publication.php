
<?php
session_start();


include("entete.php");
include("connexion.php");


    echo "publication.php";
    echo "</br>";

    $type= $_POST["publication"];

/*
*    
    On fait d'abord un lien avec ce fichier php, puis en fonction du type de publication choisi, on se dirige 
    le fichier approprie
*
*/

/*
 $SQL = "INSERT INTO publier (Type, Auteur, Zone_De_Texte, Visibilite, Fichier, Texte_Nom_Entreprise, Texte_Nom_Poste, Salaire, Duree)  //Requete generale
            VALUES('Texte','Bastien', '$message', '$visibilite')";
*/



    if($type == "Message"){
        echo "Vous voulez publier un message";
        echo "</br>";

        header("Location: publierMessage.php" );
            
    }

    if($type == "Fichier"){
        echo "Vous voulez publier un fichier";
        echo "</br>";

        header("Location: publierFichier.php" );
    }

    if($type == "Emploi"){
        echo "Vous voulez publier un emploi";
        echo "</br>";

        header("Location: publierEmploi.php" );
    }


mysqli_close($db_handle);


?>

</body>