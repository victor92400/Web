



<!-- Boutons de la barre de haut de page -->

<body style="background-color : #E0F2F7"> <!-- Jolie couleur de fond --></body>


<div id="header"> 
            <fieldset>

            <?php
include("connexion.php");

$no_utilisateur = $_SESSION['no_utilisateur_actuel'];

$SQL="SELECT Prenom, Nom FROM utilisateur WHERE no_utilisateur = $no_utilisateur  "; //Permet d'afficher le nom de la personne connectée
$result = mysqli_query($db_handle, $SQL);
while($row = $result->fetch_assoc()) { 
    echo "Vous êtes connecté en tant que " .$row["Prenom"]. " " . $row["Nom"]. "<br>";
}
mysqli_close($db_handle);

?>
                <a href="mon_profil.php">Mon profil</a> </p>
                <a href="notifications.php">Mes notifications</a> </br>
                <a href="amis.php">Mes relations</a> </br>

                <form method="post" action="recherche.php">
                    <p>
                       <label for="recherche">Rechercher des relations</label> : <input type="text" name="recherche" id="recherche" />
                   </p>
                   <input type="submit" value="Rechercher" />
                </form>
                <p>
                <a href="index.php">Retour à l'accueil</a> </br>
            </fieldset>
    </br></br>
 </div>


