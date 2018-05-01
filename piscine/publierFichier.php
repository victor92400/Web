
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>publierFichier.php</title>
    </head>

<body>

<p> publier un fichier </p>

<form method="post" action="publierFichierTraitement.php">
<p>
       <label for="legende">Légende de votre fichier</label><br />
       <textarea name="legende" id="legende"></textarea>
   </p>

   <h1> Trouver un truc pour importer un fichier et le stocker dans la bdd </h1>

   <label for="visibilite">Choisissez la visibilité de votre publication</label><br />
       <select name="visibilite" id="visibilite">
           <option value="Amis">amis</option>
           <option value="Public">public</option>
       </select>

   <input type="submit" value="Publier" />
</form>



</body>
</html>