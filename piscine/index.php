
<!-- Page d'accueil du site, après la page de login -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
    </head>

    <body>
        <div id="header"> <!-- Boutons de la barre de haut de page -->
            <ul> <a href="profil.php">Mon profil</a></p></ul> <br> 
            <ul> <a href="notifications.php">Mes notifications</a></p></ul> <br>
        </div>


<!-- Onglet publier -->
<form method="post" action="publication.php">
        <label for="publication">Que voulez vous publier?</label><br />
       <select name="publication" id="publication">
           <option value="Message">Message</option>
           <option value="Fichier">Fichier</option>
           <option value="Emploi">Emploi</option>
       </select>
       <input type="submit" value="Suivant" />
 </form>

 <!-- Insérer le fil d'actualite ici -->


    </body>

</html>




