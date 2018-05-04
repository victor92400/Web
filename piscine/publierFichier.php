<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>publierFichier.php</title>
    </head>

<body>

<?php include("entete.php"); ?>

<p> publier un fichier </p>

<form method="post" action="publierFichierTraitement.php" enctype="multipart/form-data">
<input type="file" name="filep">
    <p>
       <label for="legende">Légende de votre fichier</label><br />
       <textarea name="legende" id="legende" rows="2" cols="40"></textarea>
    </p>




</td>

    <p></p>
   <label for="visibilite">Choisissez la visibilité de votre publication</label><br />
       <select name="visibilite" id="visibilite">
           <option value="Amis">amis</option>
           <option value="Public">public</option>
       </select>
       <p>

        <input type=submit name=action value="Publier">
   <p>
</form>

<form method="post" action="index.php">
   <input type="submit" value="Annuler" />
</form>

</body>
</html>