<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>publierMessage.php</title>
    </head>

<body>
<?php include("entete.php"); ?>

<p> <font color=blue font face='verdana' size='3pt'>Publiez un gentil message</font> </p>


<form method="post" action="publierMessageTraitement.php">
<p>
       <label for="publierMessage">Publier un message</label><br />
       <textarea name="publierMessage" id="publierMessage" rows="10" cols="50"></textarea>
   </p>

    <label for="visibilite">Choisissez la visibilité de votre publication</label><br />
       <select name="visibilite" id="visibilite">
           <option value="Amis">amis</option>
           <option value="Public">public</option>
       </select>

   <input type="submit" value="Publier" />
</form>

<form method="post" action="index.php">
   <input type="submit" value="Annuler" />
</form>



</body>
</html>