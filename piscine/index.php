
<?php
session_start();
/*
Inserer le code pour definir d'autres utilisateurs connectes
*/

$_SESSION['no_utilisateur_actuel'] = 2;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Accueil</title>
           
             
    </head>

    <body style="background-color : #E0F2F7"> <!-- Jolie couleur de fond -->
        <?php include("entete.php"); ?>






<!-- Onglet publier -->

<form method="post" action="publication.php">
    <fieldset>
    <p> <font color=blue font face='verdana' size='5pt'>Publiez du contenu pour votre réseau</font> </p>
    <label for="publication">Que voulez vous publier?</label><br />
       <select name="publication" id="publication">
           <option value="Message">Message</option>
           <option value="Fichier">Fichier</option>
           <option value="Emploi">Emploi</option>
       </select>
       <input type="submit" value="Suivant" />
       </fieldset>
 </form>

 <!-- Fil d'actualité -->
 <fieldset>


 <form method="post" action="index.php">
    <fieldset>
    
    <label for="triPubli">Trier les publications par</label><br />
       <select name="triPubli" id="triPubli">
           <option value="Message">Message</option>
           <option value="Fichier">Fichier</option>
           <option value="Emploi">Emploi</option>
       </select>
       <input type="submit" value="Trier" />
    </fieldset>
 </form>


    <?php
        
        include("connexion.php");
        $triPubli="Message";

        $triPubli=$_POST["triPubli"];

       

            if($triPubli=="Message"){
                $SQL = "SELECT * FROM publier WHERE Type= 'Texte' ORDER BY Date DESC";
                $result = mysqli_query($db_handle, $SQL);

                echo "<br> <br>";

                while($row = $result->fetch_assoc()) {   //affichage du resultat
                    ?>
                    <form method="POST" action="commentaire.php"> 
                        <input type='submit' name='Profil' value='<?php echo $row["no_utilisateur"]; ?>' />
                        <input type="hidden" name="no_utilisateur_auteur_publication" value="<?php echo $row["no_utilisateur"]; ?>"/>
                    </form>
                    <?php

                    echo $row["no_utilisateur"]. " a publié un message le " . $row["Date"]." : </br> " . $row["Zone_De_Texte"]. "<br> ";
                    echo"_______________________________________________________________________________________________";
                    echo "<br> <br>";
                }
            }

            if($triPubli=="Fichier"){
                $SQL = "SELECT * FROM publier WHERE Type= 'Fichier' ORDER BY Date DESC";
                $result = mysqli_query($db_handle, $SQL);

                echo "<br> <br>";

                while($row = $result->fetch_assoc()) {   //affichage du resultat
                    echo $row["no_utilisateur"]. " a publié un fichier le " . $row["Date"]." : </br> " . $row["Fichier"]. "</br> Légende :" . $row["Zone_De_Texte"]. "<br> <br> <br> ";
                    echo"_______________________________________________________________________________________________";
                    echo "<br><br> ";
                }

            }

            if($triPubli=="Emploi"){
                $SQL = "SELECT * FROM publier WHERE Type= 'Emploi' ORDER BY Date DESC";
                $result = mysqli_query($db_handle, $SQL);

                echo "<br> <br>";

                while($row = $result->fetch_assoc()) {   //affichage du resultat
                    echo $row["no_utilisateur"]. " a publié une offre d'emploi le " . $row["Date"]." : </br>Entreprise : " . $row["Texte_Nom_Entreprise"]. 
                    "</br>Intitulé du poste : " . $row["Texte_Nom_Poste"]. "</br>Rémunération :" . $row["Salaire"]. "<br> ";
                    echo" Commentaire : ". $row["Zone_De_Texte"];
                    echo"<br> <br>_________________________________________________________________________________________";
                    echo "<br> <br>";
                }
            }
            
    ?>

    </fieldset>
    </body>

</html>




