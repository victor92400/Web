

<?php
// Start the session
session_start();




include("entete.php");

include("connexion.php");

    
    echo "</br>";

    $recherche="";  //valeur par défaut
    $recherche = $_POST["recherche"];

    $_SESSION["recherche"] = $recherche;

    

    $SQL = "SELECT * FROM utilisateur 
    WHERE Prenom LIKE '%$recherche%' 
    OR  Nom LIKE '%$recherche%'
    OR Email LIKE '%$recherche%'
    OR Login LIKE '%$recherche%' 
    OR Naissance LIKE '%$recherche%' 
    OR Sexe LIKE '%$recherche%' 
    OR  Statut LIKE '%$recherche%' 
    OR Adresse LIKE '%$recherche%' 
    OR Couleur LIKE '%$recherche%'" ;

    

                $result = mysqli_query($db_handle, $SQL);

                if($result->num_rows == 0){echo"<br> Aucun résultat pour la recherche " 
                    . $recherche . " :( " ;
                }
                else{echo"Résultats pour la recherche \"$recherche\" : ";}
                
                

                echo "<br> <br>";

                

                while($row = $result->fetch_assoc()) {   //affichage du resultat
                    ?>
                        <form method="POST" action="profil.php"> 
                            <input type='submit' name='Profil' value='<?php echo $row["Prenom"]. " " . $row["Nom"]; ?>' />
                            <input type="hidden" name="no_utilisateur_recherche" value="<?php echo $row["no_utilisateur"]; ?>"/>
                        </form>

                        <form method="POST" action="amitie.php"> 
                            <input type='submit' name='Amis' value='Ajouter cette personne à vos relations' />
                            <input type="hidden" name="no_utilisateur_recherche" value="<?php echo $row["no_utilisateur"]; ?>"/>
                        </form>

                    <?php
                    
                        echo $row["Email"]. 
                         "<br> ID système : " . $row["no_utilisateur"] . 
                         "<br> Date de naissance : " . $row["Naissance"] .
                         "<br> Sexe : " . $row["Sexe"] . 
                         "<br> Statut : " . $row["Statut"] .
                         "<br> Adresse : " . $row["Adresse"] . 
                         "<br> Couleur préférée : " . $row["Couleur"]. "<br>";
                         echo"_______________________________________________________________________________________________";
                    echo "<br> <br>";
                         

                }
mysqli_close($db_handle);


?>