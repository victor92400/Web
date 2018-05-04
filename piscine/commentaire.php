
<?php
session_start();

include("entete.php");
include("connexion.php");
$no_utilisateur_auteur_publication=$_POST["no_utilisateur_auteur_publication"]; //actuel!! a changer


$commentaire = $_POST["commentaire"];
$no_utilisateur_actuel = $_SESSION['no_utilisateur_actuel'];
$no_publication=$_POST["no_publication"];



$SQL = "INSERT INTO commentaire (no_utilisateur_actuel, no_auteur_publication, no_publication, Commentaire) 
            VALUES('$no_utilisateur_actuel', '$no_utilisateur_auteur_publication', '$no_publication', '$commentaire')";
            
            $result = mysqli_query($db_handle, $SQL);

            if($result){
                echo"</br>";
                echo "Commentaire publié et ajouté à la bdd";
                echo"</br>";
            }
            else{echo "<br>merde";}

            header("Location: index.php");


            /*
            ?>          
                <input type="button" value="Revenir à l'écran d'accueil" class="homebutton" id="btnHome" 
                onClick="document.location.href='index.php'" />
            <?php*/
?>


