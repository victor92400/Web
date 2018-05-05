<?php
    
    session_start();
    
    include("entete.php");
    include("connexion.php");

    echo "publicationMessageTraitement.php";
    echo "</br>";
    echo "</br>";

    
        echo "Vous voulez publier une offre d'emploi";
        echo "</br>";

            $no_utilisateur_actuel = $_SESSION['no_utilisateur_actuel'];

           
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


            $SQL = "INSERT INTO publier (Type, no_utilisateur, Zone_De_Texte, Visibilite, Texte_Nom_Entreprise, Texte_Nom_Poste, Salaire) 
            VALUES('Emploi','$no_utilisateur_actuel', '$commentaire', '$visibilite', '$entreprise', '$poste' , $remuneration)";



            
            $result = mysqli_query($db_handle, $SQL);

            if($result){
                echo"</br>";
                echo "Offre d'emploi publiée et ajoutée à la bdd";
                echo"</br>";

                header('Location : index.php');
            

            

        }

?>
