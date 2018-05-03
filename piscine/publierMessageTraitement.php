<?php


session_start();

    echo "</br>";
    echo "</br>";
    include("connexion.php");

        
           
            $message=$_POST["publierMessage"];
            $visibilite=$_POST["visibilite"];

            if($visibilite == 'Amis'){
                $visibilite = 0;
            }

            else{$visibilite = 1;}




            $SQL = "INSERT INTO publier (Type, Auteur, Zone_De_Texte, Visibilite) 
            VALUES('Texte','Bastien', '$message', '$visibilite')";
            
            $result = mysqli_query($db_handle, $SQL);

            if($result){
                echo"</br>";
                echo "Message publié et ajouté à la bdd";
                echo"</br>";

            
            ?>          
                <input type="button" value="Revenir à l'écran d'accueil" class="homebutton" id="btnHome" 
                onClick="document.location.href='index.php'" />
            <?php
           
            

            

        }

?>
