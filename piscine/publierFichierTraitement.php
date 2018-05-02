<?php

    echo "publicationMessageTraitement.php";
    echo "</br>";
    echo "</br>";

    
        echo "Vous voulez publier un fichier";
        echo "</br>";

        $user = "root";
        $pass = "";
        $db = "piscine";
        $server = "127.0.0.1";

        $db_handle = mysqli_connect($server, $user, $pass); 
        $db_found = mysqli_select_db($db_handle, $db);
        if ($db_found) {
           
            $legende=$_POST["legende"];

            $nomFichier= $_FILES['fichier']['name'];

            $tmp_name= $_FILES['fichier']['tmp_name'];


            $position= strpos($nomFichier, "."); 
            $fileextension= substr($nomFichier, $position + 1);
            $fileextension= strtolower($fileextension);

            echo "</br>";
            echo"$nomFichier";echo "</br>";

            if (isset($nomFichier)) {
    
                $path= '/uploads';

                if (!empty($nomFichier)){
                    if (move_uploaded_file($tmp_name, "$path")) { //Pas trop sur de ou va le fichier
                        echo 'Uploaded!';

                    }
                }
            }



            $visibilite=$_POST["visibilite"];

            if($visibilite == 'Amis'){
                $visibilite = 0;
            }
            else{$visibilite = 1;}




            $SQL = "INSERT INTO publier (Type, Auteur, Zone_De_Texte, Visibilite, Fichier)  
            VALUES('Fichier','Bastien', '$legende', '$visibilite', '$nomFichier')";

            $result = mysqli_query($db_handle, $SQL);

            if($result){
                echo"</br>";
                echo "Message publié et ajouté à la bdd";
                echo"</br>";
            }
            else{
                echo"Publication failed";
            }
/*

Affichage des fichiers importes marche pas

            $SQL2= "SELECT * FROM publier ";
            $result2= mysqli_query($db_handle, $SQL2);
            if($result2){
                echo"</br>";
                echo "result2 marche";
                echo"</br>";
            }
            else{
                echo"result2 marche pas";
            }

            print "<table border=1>\n"; 
while ($row = mysql_fetch_array($result2)){ 
$files_field= $row['Fichier'];
$files_show= "Uploads/files/$files_field";
$descriptionvalue= $row['description'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; 

*/
        

        }

?>
