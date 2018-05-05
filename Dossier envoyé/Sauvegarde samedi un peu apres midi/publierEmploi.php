<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>publierEmploi.php</title>
    </head>
<body>

<?php include("entete.php"); ?>

<p> <font color=blue font face='verdana' size='3pt'>Publiez une offre d'emploi</font> </p>

<fieldset>
<form method="post" action="publierEmploiTraitement.php">

    <label for="entreprise">Nom de l'entreprise :</label>
    <input type="text" name="entreprise" id="entreprise" placeholder="Ex : ECE Paris" size="30"  /> </br></br>

    <label for="poste"> Intitule du poste :</label>
    <input type="text" name="poste" id="poste" placeholder="Ex : Stagiaire" size="30"  /></br></br>

    <label for="remuneration">Remuneration par mois :</label>
    <input type="number" name="remuneration" id="remuneration" placeholder="Ex : 5000" size="30"  /></br></br>

    <label for="duree">Durée :</label>
    <input type="text" name="duree" id="duree" placeholder="Ex : du 01/07/18 au 01/08/18" size="30" /></br></br>

    <label for="commentaire">Commentaire sur l'offre :</label>
    <input type="text" name="commentaire" id="commentaire" placeholder="Ex : Motive et souriant" size="30"  /></br></br>

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
</fieldset>



</body>
</html>