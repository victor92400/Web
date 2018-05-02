
<!-- Page d'accueil du site, après la page de login -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Accueil</title>

           
             
    </head>

    <body style="background-color : #E0F2F7">
        <div id="header"> <!-- Boutons de la barre de haut de page -->
            <fieldset>
                <a href="profil.php">Mon profil</a> </p>
                <a href="notifications.php">Mes notifications</a> </br>
            </fieldset>
            </br></br>
        </div>


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
    <?php
        echo "<p> <font color=blue font face='verdana' size='5pt'>Fil d'actualité</font> </p>";

        $user = "root";
        $pass = "";
        $db = "piscine";
        $server = "127.0.0.1";

        $db_handle = mysqli_connect($server, $user, $pass); 
        $db_found = mysqli_select_db($db_handle, $db);
        if ($db_found) {

            $SQL = "SELECT * FROM publier ORDER BY Date";
            $result = mysqli_query($db_handle, $SQL);

            echo "<br> <br>";

            while($row = $result->fetch_assoc()) {   //technique 2
                echo $row["Auteur"]. " a publié un " . $row["Type"]. " le " . $row["Date"]." : </br> " . $row["Zone_De_Texte"]. "<br> <br> <br> ";
                if($row == 'Fichier'){
                    echo $row["Fichier"];
                }

               // echo "id: " . $row["Type"]. " - type: " . $row["Auteur"]. " +++ " . $row["Zone_De_Texte"]. "<br>";
            }



            }
            else{
                echo"db not found";
            }

           

    ?>




    </fieldset>
    </body>

</html>




