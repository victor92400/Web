
<?php  

 //require('db_connect.php');
$connection = mysqli_connect('localhost', 'root', 'root');
$select_db = mysqli_select_db($connection, 'Plouf');



// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT Photo FROM utilisateur_administrateur";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
while($row = $result->fetch_assoc()) {   //technique 2
    echo $row["Photo"]. "";
}

?>


<?php
 
    //connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=utilisateur_administrateur', 'root', 'root');
    } catch (Exception $e) {
        exit('Erreur : ' . $e->getMessage());
    }
 
    //la requète qui récupère l'image à partir de l'identifiant
    $req = $bdd->prepare('SELECT Photo FROM utilisateur_administrateur WHERE no_utilisateur = 6');
    $req->execute(array($idImg));       
 
    if($req->rowCount() != 1)
        echo 'L\'image n\'existe pas !';
    else {
        //on stocke les données dans un tableau
        $utilisateur_administrateur = $req->fetch();       
        //on indique qu'on affiche une image
        header ("Content-type: ".$utilisateur_administrateur['png']);
        //on affiche l'image en elle même
        echo $utilisateur_administrateur['Photo'];
    }
 
    $req->closeCursor();
 
     else
           echo 'Vous n avez pas sélectionné d image !';
?>





