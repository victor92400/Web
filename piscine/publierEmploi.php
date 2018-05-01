
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>publierEmploi.php</title>
    </head>

<body>

<p> publier une offre d'emploi </p>

<form method="post" action="publierEmploiTraitement.php">

    <label for="entreprise">Nom de l'entreprise :</label>
    <input type="text" name="entreprise" id="entreprise" placeholder="Ex : ECE Paris" size="30" maxlength="10" />

    <label for="poste"> Intitule du poste :</label>
    <input type="text" name="poste" id="poste" placeholder="Ex : Stagiaire" size="30" maxlength="10" />

    <label for="remuneration">Remuneration par mois :</label>
    <input type="number" name="remuneration" id="remuneration" placeholder="Ex : 5000" size="30" maxlength="10" />

    <label for="duree">Durée :</label>
    <input type="text" name="duree" id="duree" placeholder="Ex : du 01/07/18 au 01/08/18" size="30" maxlength="10" />

   <label for="visibilite">Choisissez la visibilité de votre publication</label><br />
       <select name="visibilite" id="visibilite">
           <option value="Amis">amis</option>
           <option value="Public">public</option>
       </select>

   <input type="submit" value="Publier" />
</form>



</body>
</html>