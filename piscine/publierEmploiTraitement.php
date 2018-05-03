<?php
    
    session_start();
    
    include("entete.php");
    include("connexion.php");

    echo "publicationMessageTraitement.php";
    echo "</br>";
    echo "</br>";

    
        echo "Vous voulez publier une offre d'emploi";
        echo "</br>";

    
           
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

            $SQL = "INSERT INTO publier (Type, Auteur, Zone_De_Texte, Visibilite, Texte_Nom_Entreprise, Texte_Nom_Poste, Salaire) 
            VALUES('Emploi','Bastien', '$commentaire', '$visibilite', '$entreprise', '$poste' , $remuneration)";



            
            $result = mysqli_query($db_handle, $SQL);

            if($result){
                echo"</br>";
                echo "Offre d'emploi publiée et ajoutée à la bdd";
                echo"</br>";

                ?>          
                <input type="button" value="Revenir à l'écran d'accueil" class="homebutton" id="btnHome" 
                onClick="document.location.href='index.php'" />
                <?php
            

            

        }

?>
