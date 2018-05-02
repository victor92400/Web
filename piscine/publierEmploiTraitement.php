<?php

    echo "publicationMessageTraitement.php";
    echo "</br>";
    echo "</br>";

    
        echo "Vous voulez publier une offre d'emploi";
        echo "</br>";

        $user = "root";
        $pass = "";
        $db = "piscine";
        $server = "127.0.0.1";

        $db_handle = mysqli_connect($server, $user, $pass); 
        $db_found = mysqli_select_db($db_handle, $db);
        if ($db_found) {
           
            $entreprise=$_POST["entreprise"];
            $poste=$_POST["poste"];
            $remuneration=$_POST["remuneration"];
            $duree=$_POST["duree"];
            $commentaire=$_POST["commentaire"];

            $visibilite=$_POST["visibilite"];

            if($visibilite == 'Amis'){
                $visibilite = 0;
            }
            else{$visibilite = 1;}


/*
            $SQL = "INSERT INTO publier (Type, Auteur, Zone_De_Texte, Visibilite, Texte_Nom_Entreprise, Texte_Nom_Poste, Salaire, Duree) 
            VALUES('Emploi','Bastien', '$commentaire', '$visibilite', '$entreprise', '$poste', $remuneration, $duree)";*/

            $SQL = "INSERT INTO publier (Type, Auteur, Zone_De_Texte, Visibilite, Texte_Nom_Entreprise, Texte_Nom_Poste, Salaire, Duree) 
            VALUES('Emploi','Bastien', '$commentaire', '$visibilite', '$entreprise', '$poste' , $remuneration, $duree)";



            
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
