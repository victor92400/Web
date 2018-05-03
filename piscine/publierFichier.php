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
<p>
       <label for="legende">Légende de votre fichier</label><br />
       <textarea name="legende" id="legende" rows="5" cols="50"></textarea>
   </p>

    
    <input type="file" name="fichier"/><br><br>


   <label for="visibilite">Choisissez la visibilité de votre publication</label><br />
       <select name="visibilite" id="visibilite">
           <option value="Amis">amis</option>
           <option value="Public">public</option>
       </select>

   <input type="submit" value="Publier" />
</form>



</body>
</html>