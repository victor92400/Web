<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

img.avatar {
    width: 5%;
    border-radius: 60%;
}
img.avatar2 {

    border-radius: 60%;
}
img.avatar3 {
    margin-left: -10px;
}
.button {
    background-color: #009999;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.button2 {
    background-color: #0431B4;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.button4 {border-radius: 12px;}
button:hover {
    opacity: 0.8;
}
.wrapper {
    text-align: center;
}
.beautiful {
    font-size: 20px;
}
</style>
</head>

<body style="background-color:powderblue;">

<img src="logooin.png" alt="Avatar" class="avatar"><br>
<div class="wrapper" class="Avatar">
<button class="button button4" onclick="location.href='index.php';" style="width:auto;">Acceuil</button>
<button class="button button4" style="width:auto;">Notifications</button>
<form action="search.php" method="GET">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
</form>
</div>


<script>

</script>
</body>
</html>

<div align="center" class="beautiful">
    <?php

        $admin = $_SESSION['no_utilisateur_actuel'];

        $user = "root";
        $pass = "root";
        $db = "piscine";
        $connection = mysqli_connect('localhost', 'root', 'root');
        $db_found = mysqli_select_db($connection, $db);
        if ($db_found) {
            $SQL = "SELECT * FROM utilisateur WHERE no_utilisateur='$admin'";
            $result = mysqli_query($connection, $SQL);
            echo "<br> <br>";

            while($row = $result->fetch_assoc()) {   //technique 2

                echo '<img class="avatar3" width="1600" height="300" src="'.$row['FondEcran'].'"/>'; echo '<img class="avatar2" width="150" height="150" src="'.$row['Photo'].'"/>';
                echo"<br><br>";

                echo $row["Prenom"]."  ".$row["Nom"]."<br>";
                echo $row["Statut"]."<br>";
                echo $row["Adresse"]."<br><br>";
                echo $row["Email"]."<br>";
                echo $row["Sexe"]."<br>";
                echo $row["Naissance"]."<br>";
                echo $row["Couleur"]."<br><br>";
                echo '<img width="300" height="500" src="'.$row['CV'].'"/>';
                echo "<br>";
                $_SESSION["bob"] = $row["no_utilisateur"];
                ?>
                <form method="POST" action="amitie.php"> <!-- Bouton d'ajout en ami -->
                  <input type='submit' name='Amis' value='Ajouter cette personne à vos relations' /><br>
                  <input type="hidden" name="no_utilisateur_parametre" value="<?php echo $row["no_utilisateur"]; ?>"/><br><br><br> 
                </form>
                <form method="POST" action="suppr_utilisateur.php">
                <button class="button2 button4" style="width:auto;">Supprimer Utilisateur</button>
                </form>
                <form method="POST" action="ajouter.php">
                <button class="button2 button4" style="width:auto;">Ajouter Utilisateur</button>
                </form>

    <?php
                

            }
            }
            else{
                echo"db not found";
            }
           
    ?>
</td>


