

<?php

session_start();

include("entete.php");
include("connexion.php");
$no_utilisateur=$_POST["no_utilisateur_parametre"];



/////// AFFICHER LE PROFIL AVEC LE TRUC DE VICTOR ////////////

$SQL="SELECT * FROM utilisateur WHERE no_utilisateur = $no_utilisateur";
$result = mysqli_query($db_handle, $SQL);
while($row = $result->fetch_assoc()) {   //affichage du resultat

    ?>
        <form method="POST" action="amitie.php"> <!-- Bouton d'ajout en ami -->
            <input type='submit' name='Amis' value='Ajouter cette personne à vos relations' />
            <input type="hidden" name="no_utilisateur_parametre" value="<?php echo $row["no_utilisateur"]; ?>"/> 
        </form>

    <?php
    
    echo $row["Prenom"]. " " . $row["Nom"].
         "<br> Email : " . $row["Email"]. 
         "<br> ID système : " . $row["no_utilisateur"] . 
         "<br> Date de naissance : " . $row["Naissance"] .
         "<br> Sexe : " . $row["Sexe"] . 
         "<br> Statut : " . $row["Statut"] .
         "<br> Adresse : " . $row["Adresse"] . 
         "<br> Couleur préférée : " . $row["Couleur"] .
         "<br><br> ";
///////////////////////////
}
mysqli_close($db_handle);

?>
