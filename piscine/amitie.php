<?php
session_start();

include("entete.php");
include("connexion.php");
$no_utilisateur_recherche=$_POST["no_utilisateur_recherche"];

$no_utilisateur_actuel = $_SESSION['no_utilisateur_actuel'];


$SQL = "INSERT INTO relations (no_utilisateur1, no_utilisateur2) 
VALUES('$no_utilisateur_actuel', '$no_utilisateur_recherche' )";

$result = mysqli_query($db_handle, $SQL);


            if($result){
               
                $SQL2 = "SELECT * FROM utilisateur WHERE no_utilisateur= $no_utilisateur_recherche ";
                $result2 = mysqli_query($db_handle, $SQL2);

                echo "<br> <br>";

                

                while($row = $result2->fetch_assoc()) {   //affichage du resultat
                    echo "<br> <br>Félicitations! <br><br>Vous êtes bien connecté avec " .$row["Prenom"]. " " . $row["Nom"];
                }


            }
            else{
                echo "Vous êtes déja amis";
            }

                echo"</br>";

                ?>          
                <input type="button" value="Revenir à l'écran d'accueil" class="homebutton" id="btnHome" 
                onClick="document.location.href='index.php'" />
                <?php

//requete ajouter ami


mysqli_close($db_handle);

?>

</body>
</html>