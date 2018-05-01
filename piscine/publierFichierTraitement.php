<?php

    echo "publicationMessageTraitement.php";
    echo "</br>";
    echo "</br>";

    
        echo "Vous voulez publier un fichier";
        echo "</br>";

        $user = "root";
        $pass = "";
        $db = "piscine";
        $server = "127.0.0.1";

        $db_handle = mysqli_connect($server, $user, $pass); 
        $db_found = mysqli_select_db($db_handle, $db);
        if ($db_found) {
           
            $legende=$_POST["legende"];
            $visibilite=$_POST["visibilite"];

            if($visibilite == 'Amis'){
                $visibilite = 0;
            }
            else{$visibilite = 1;}



/*
            $SQL = "INSERT INTO publier (Type, Auteur, Zone_De_Texte, Visibilite)  //Adapter la requete pour un fichier
            VALUES('Texte','Bastien', '$message', '$visibilite')";
*/
            $result = mysqli_query($db_handle, $SQL);

            if($result){
                echo"</br>";
                echo "Message publié et ajouté à la bdd";
                echo"</br>";
            }
            else{
                echo"Publication failed";
            }

            

        }

?>
