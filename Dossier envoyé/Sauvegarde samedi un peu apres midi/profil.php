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
    border-radius: 25%;
}
.button {
    background-color: #4CAF50;
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
<button class="button button4" onclick="location.href='Piscine_login.php';" style="width:auto;">Accueil</button>
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

        $utilisat = $_SESSION["user_id"];

        $user = "root";
        $pass = "root";
        $db = "piscine";
        $connection = mysqli_connect('localhost', 'root', '');
        $db_found = mysqli_select_db($connection, $db);
        if ($db_found) {
            $SQL = "SELECT * FROM utilisateur WHERE Login='$utilisat'";
            $result = mysqli_query($connection, $SQL);
            echo "<br> <br>";

            while($row = $result->fetch_assoc()) {   //technique 2

                echo '<img src="'.$row['FondEcran'].'"/>'; echo '<img src="'.$row['Photo'].'"/>';
                echo"<br>";

                echo $row["Prenom"]."  ".$row["Nom"]."<br>";
                echo $row["Statut"]."<br>";
                echo $row["Adresse"]."<br><br>";
                echo $row["Email"]."<br>";
                echo $row["Sexe"]."<br>";
                echo $row["Naissance"]."<br>";
                echo $row["CV"]."<br>";
                echo $row["Couleur"]."<br>";
                

            }
            }
            else{
                echo"db not found";
            }
           
    ?>
</td>


