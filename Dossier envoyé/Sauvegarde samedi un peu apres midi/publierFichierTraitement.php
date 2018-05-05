<?php

session_start();


    include("entete.php");
    

    echo "publicationMessageTraitement.php";
    echo "</br>";
    echo "</br>";

    
        echo "Vous voulez publier un fichier";
        echo "</br>";
        include("connexion.php");

            $no_utilisateur_actuel = $_SESSION['no_utilisateur_actuel'];
           
            $legende=$_POST["legende"];


            if ($_POST["action"] == "Publier")
            {   

                $visibilite=$_POST["visibilite"];

            if($visibilite == 'Amis'){
                $visibilite = 0;
            }
            else{$visibilite = 1;}


                
                $path = 'images/';
                $location = $path.$_FILES["filep"]["name"];
            move_uploaded_file($_FILES["filep"]["tmp_name"] , $location );
            
            echo $_FILES["filep"]["name"]." a bien été téléchargé <br><br>";
            
            
            $SQL="INSERT into publier (Type, no_utilisateur, Zone_De_Texte, Visibilite, Fichier)  
            VALUES('Fichier','$no_utilisateur_actuel', '$legende', '$visibilite', '$location')";
            $result = mysqli_query($db_handle, $SQL);


            
            
            if($result) { echo "Le fichier a été publié avec succès. <br><br>"; } //Verifications d'importation
            else {echo "Il y a eu un problème lors de la publication du fichier et de son importation dans la base de donnée. <br><br>";}


}

?>          
<input type="button" value="Revenir à l'écran d'accueil" class="homebutton" id="btnHome" 
onClick="document.location.href='index.php'" />
<?php
            
?>
