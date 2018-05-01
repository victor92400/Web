
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>publierMessage.php</title>
    </head>

<body>

<p> Publication d'un gentil message </p>

<form method="post" action="publierMessageTraitement.php">
<p>
       <label for="publierMessage">Publier un message</label><br />
       <textarea name="publierMessage" id="publierMessage"></textarea>
   </p>

    <label for="visibilite">Choisissez la visibilité de votre publication</label><br />
       <select name="visibilite" id="visibilite">
           <option value="Amis">amis</option>
           <option value="Public">public</option>
       </select>

   <input type="submit" value="Publier" />
</form>



</body>
</html>