



<?php
session_start();
?>


<form method="post" action="index.php">
    <fieldset>
    <p> Choisissez votre no_utilisateur </p>
    <label for="id">no utilisateur</label><br />
       <select name="id" id="id">
           <option value="1">Victor</option>
           <option value="2">Bastien</option>
           <option value="3">Jean</option>
           <option value="4">Sebastien</option>
       </select>
       <input type="submit" value="Valider" />
       </fieldset>
 </form>


<?php

$id = (!isset($_POST['id']) ? '1' : $_POST['id']); //Selection d'un utilisateur des le debut. A virer avant le rendu

$_SESSION['no_utilisateur_actuel'] = $id;


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

        $triPubli = (!isset($_POST['triPubli']) ? 'Message' : $_POST['triPubli']);
      
        

       
////////////////////////////////////////////////MESSAGE //////////////////////////////////

            if($triPubli=="Message"){
                $SQL = "SELECT * FROM publier WHERE Type= 'Texte' ORDER BY Date DESC"; //affichage des publications
                $result = mysqli_query($db_handle, $SQL);

                echo "<br> <br>";
                

                while($row = $result->fetch_assoc() ) {   //affichage du resultat

                
                    $truc=$row['no_utilisateur'];
                   
                    $SQL2="SELECT * FROM utilisateur WHERE no_utilisateur = '$truc' ";//requete pour avoir nom de l'utilisateur auteur de la publication
                    $result2 = mysqli_query($db_handle, $SQL2);
                    if(!$result2){echo"result2 pas marche";}

                    while($row2 = $result2->fetch_assoc() ) {
                        ?>
                    <form method="POST" action="profil.php"> 
                        <input type='submit' name='Profil' value='<?php echo $row2["Prenom"] . " " .$row2["Nom"]; ?>' />
                        <input type="hidden" name="no_utilisateur_parametre" value="<?php echo $row["no_utilisateur"]; ?>"/>
                    </form>
                    <?php

                    }


                    echo " a publié un message le " . $row["Date"]." : </br> " . $row["Zone_De_Texte"];

                    $SQL3="SELECT * FROM utilisateur WHERE no_utilisateur = '$truc' ";  //Entrer les commentaires
                        $result3 = mysqli_query($db_handle, $SQL3); 
                        if(!$result3){echo"result3 pas marche";}

                        while($row3 = $result3->fetch_assoc() ) {
                        ?>
                            <form method="POST" action="commentaire.php"> 

                                <p><label for="commentaire">Publier un commentaire</label><br />
                                <textarea name="commentaire" id="commentaire" rows="2" cols="30"></textarea>
                                <input type="hidden" name="no_utilisateur_auteur_publication" value="<?php echo $row["no_utilisateur"]; ?>"/>
                                <input type="hidden" name="no_publication" value="<?php echo $row["no_publication"]; ?>"/>

                                <input type='submit' name='Profil' value="Commenter" />
                                

                            </form>
                        <?php
                        }

                        

                        

                        $no_publication = $row["no_publication"];

                        $SQL4="SELECT * FROM commentaire WHERE no_publication = '$no_publication' ORDER BY Date ";  //Affichage des commentaires
                        $result4 = mysqli_query($db_handle, $SQL4); 
                        if(!$result4){echo"result4 pas marche";}

                        if($result4->num_rows == 0){echo"";} //Ne rien afficher si pas de commentaires
                        else{
                            echo "Commentaires : <br>" ;
                            ?>
                            <fieldset>
                            <?php
                            while($row4 = $result4->fetch_assoc() ) {

                                $auteur_commentaire=$row4["no_utilisateur_actuel"];
                                
                                $SQL5="SELECT * FROM utilisateur WHERE no_utilisateur = '$auteur_commentaire'  ";  //Affichage des auteurs des commentaires
                                $result5 = mysqli_query($db_handle, $SQL5); 
                                if(!$result5){echo"result5 pas marche";}

                                
                                    while($row5 = $result5->fetch_assoc() ) {  //Boutons de profil des auteurs des commentaires

                                        ?>
                                        <form method="POST" action="profil.php">  
                                            <input type='submit' name='Profil' value='<?php echo $row5["Prenom"] . " " .$row5["Nom"]; ?>' />
                                            <input type="hidden" name="no_utilisateur_parametre" value="<?php echo $auteur_commentaire; ?>"/>
                                          
                                        </form>
                                        <?php
                                        echo $row4["Commentaire"] . "<br><br>";
                                }
                            }
                            ?>
                            </fieldset> <p>
                            <?php
                        }

                        echo"_______________________________________________________________________________________________";
                    echo "<br> <br>";
                    
                }
                
            }

            ////////////////////////////////////////////////FICHIER //////////////////////////////////

            if($triPubli=="Fichier"){
                $SQL = "SELECT * FROM publier WHERE Type= 'Fichier' ORDER BY Date DESC";
                $result = mysqli_query($db_handle, $SQL);

                echo "<br> <br>";

                while($row = $result->fetch_assoc()) {   //affichage du resultat


                    $truc=$row['no_utilisateur'];
                   
                    $SQL2="SELECT * FROM utilisateur WHERE no_utilisateur = '$truc' ";  //Affichage du premier bouton pour le profil
                    $result2 = mysqli_query($db_handle, $SQL2); 
                    if(!$result2){echo"result2 pas marche";}

                    while($row2 = $result2->fetch_assoc() ) {
                        ?>
                    <form method="POST" action="profil.php"> 
                        <input type='submit' name='Profil' value='<?php echo $row2["Prenom"] . " " .$row2["Nom"]; ?>' />
                        <input type="hidden" name="no_utilisateur_auteur_publication" value="<?php echo $row["no_utilisateur"]; ?>"/>
                    </form>
                    <?php
                    }

                    echo " a publié un fichier le " . $row["Date"]." : </br> </br> Légende :" . $row["Zone_De_Texte"]."<br><br>";
                    
                
                    /*$src=$file_path.$row['Fichier'];
                    echo "<img src=".$src.">  <br>";*/

                    //echo '<img src= '.$row["Fichier"].'/>';
                    echo $row["no_publication"] . " : numerro de publication <br><br>";
                    echo '<img width="250" height="250" src= "'.$row["Fichier"].'"/>';







                    $SQL3="SELECT * FROM utilisateur WHERE no_utilisateur = '$truc' ";  //Entrer les commentaires
                    $result3 = mysqli_query($db_handle, $SQL3); 
                    if(!$result3){echo"result3 pas marche";}

                    while($row3 = $result3->fetch_assoc() ) {
                    ?>
                        <form method="POST" action="commentaire.php"> 

                            <p><label for="commentaire">Publier un commentaire</label><br />
                            <textarea name="commentaire" id="commentaire" rows="2" cols="30"></textarea>
                            <input type="hidden" name="no_utilisateur_auteur_publication" value="<?php echo $row["no_utilisateur"]; ?>"/>
                            <input type="hidden" name="no_publication" value="<?php echo $row["no_publication"]; ?>"/>

                            <input type='submit' name='Profil' value="Commenter" />
                            

                        </form>
                    <?php
                    }

                    

                    

                    $no_publication = $row["no_publication"];

                    $SQL4="SELECT * FROM commentaire WHERE no_publication = '$no_publication' ORDER BY Date ";  //Affichage des commentaires
                    $result4 = mysqli_query($db_handle, $SQL4); 

                    if($result4->num_rows == 0){echo"";} //Ne rien afficher si pas de commentaires
                    else{
                        echo "Commentaires : <br>" ;
                        ?>
                        <fieldset>
                        <?php
                        while($row4 = $result4->fetch_assoc() ) {

                            $auteur_commentaire=$row4["no_utilisateur_actuel"];
                            
                            $SQL5="SELECT * FROM utilisateur WHERE no_utilisateur = '$auteur_commentaire'  ";  //Affichage des auteurs des commentaires
                            $result5 = mysqli_query($db_handle, $SQL5); 
                            if(!$result5){echo"result5 pas marche";}

                            
                                while($row5 = $result5->fetch_assoc() ) {

                                    ?>
                                    <form method="POST" action="profil.php"> 
                                        <input type='submit' name='Profil' value='<?php echo $row5["Prenom"] . " " .$row5["Nom"]; ?>' />
                                        <input type="hidden" name="no_utilisateur_parametre" value="<?php echo $auteur_commentaire; ?>"/>
                                        
                                    </form>
                                    <?php
                                    echo $row4["Commentaire"] . "<br><br>";
                            }
                        }
                        ?>
                        </fieldset> <p>
                        <?php
                    }


                   
                    echo"_______________________________________________________________________________________________";
                    echo "<br><br> ";
                
            }

            }


////////////////////////////////////////////////EMPLOI //////////////////////////////////
            if($triPubli=="Emploi"){
                $SQL = "SELECT * FROM publier WHERE Type= 'Emploi' ORDER BY Date DESC";
                $result = mysqli_query($db_handle, $SQL);

                echo "<br> <br>";

                while($row = $result->fetch_assoc()) {   //affichage du resultat

                    $truc=$row['no_utilisateur'];
                   
                    $SQL2="SELECT * FROM utilisateur WHERE no_utilisateur = '$truc' ";
                    $result2 = mysqli_query($db_handle, $SQL2);
                    if(!$result2){echo"result2 pas marche";}

                    while($row2 = $result2->fetch_assoc() ) {
                        ?>
                    <form method="POST" action="commentaire.php"> 
                        <input type='submit' name='Profil' value='<?php echo $row2["Prenom"] . " " .$row2["Nom"]; ?>' />
                        <input type="hidden" name="no_utilisateur_auteur_publication" value="<?php echo $row["no_utilisateur"]; ?>"/>
                    </form>
                    <?php

                    }

                    echo " a publié une offre d'emploi le " . $row["Date"]." : </br>Entreprise : " . $row["Texte_Nom_Entreprise"]. 
                    "</br>Intitulé du poste : " . $row["Texte_Nom_Poste"]. "</br>Rémunération :" . $row["Salaire"]. "<br> ";
                    echo" Commentaire : ". $row["Zone_De_Texte"];


                    $SQL3="SELECT * FROM utilisateur WHERE no_utilisateur = '$truc' ";  //Entrer les commentaires
                    $result3 = mysqli_query($db_handle, $SQL3); 
                    if(!$result3){echo"result3 pas marche";}

                    while($row3 = $result3->fetch_assoc() ) {
                    ?>
                        <form method="POST" action="commentaire.php"> 

                            <p><label for="commentaire">Publier un commentaire</label><br />
                            <textarea name="commentaire" id="commentaire" rows="2" cols="30"></textarea>
                            <input type="hidden" name="no_utilisateur_auteur_publication" value="<?php echo $row["no_utilisateur"]; ?>"/>
                            <input type="hidden" name="no_publication" value="<?php echo $row["no_publication"]; ?>"/>

                            <input type='submit' name='Profil' value="Commenter" />
                            

                        </form>
                    <?php
                    }

                    

                    

                    $no_publication = $row["no_publication"];

                    $SQL4="SELECT * FROM commentaire WHERE no_publication = '$no_publication' ORDER BY Date ";  //Affichage des commentaires
                    $result4 = mysqli_query($db_handle, $SQL4); 
                    if(!$result4){echo"result4 pas marche";}


                    if($result4->num_rows == 0){echo"";} //Ne rien afficher si pas de commentaires
                    else{
                        echo "Commentaires : <br>" ;
                        ?>
                        <fieldset>
                        <?php
                        while($row4 = $result4->fetch_assoc() ) {

                            $auteur_commentaire=$row4["no_utilisateur_actuel"];
                            
                            $SQL5="SELECT * FROM utilisateur WHERE no_utilisateur = '$auteur_commentaire'  ";  //Affichage des auteurs des commentaires
                            $result5 = mysqli_query($db_handle, $SQL5); 
                            if(!$result5){echo"result5 pas marche";}

                            
                                while($row5 = $result5->fetch_assoc() ) {

                                    ?>
                                    <form method="POST" action="profil.php"> 
                                        <input type='submit' name='Profil' value='<?php echo $row5["Prenom"] . " " .$row5["Nom"]; ?>' />
                                        <input type="hidden" name="no_utilisateur_parametre" value="<?php echo $auteur_commentaire; ?>"/>
                                        
                                    </form>
                                    <?php
                                    echo $row4["Commentaire"] . "<br><br>";
                            }
                        }
                        ?>
                        </fieldset> <p>
                        <?php
                    }


                    echo"<br> <br>_________________________________________________________________________________________";
                    echo "<br> <br>";
                }
            }

           
            
    ?>

    </fieldset>
    </body>

</html>




