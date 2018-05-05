<body style="background-color:#E0F2F7;"></body>

<?php


session_start();

    echo "</br>";
    echo "</br>";
    include("connexion.php");

        
           
            $message=$_POST["publierMessage"];
            $visibilite=$_POST["visibilite"];

            $no_utilisateur_actuel = $_SESSION['no_utilisateur_actuel'];

            if($visibilite == 'Amis'){
                $visibilite = 0;
            }

            else{$visibilite = 1;}




            $SQL = "INSERT INTO publier (Type, no_utilisateur, Zone_De_Texte, Visibilite) 
            VALUES('Texte','$no_utilisateur_actuel', '$message', '$visibilite')";
            
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
