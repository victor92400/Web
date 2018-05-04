
<?php  

 //require('db_connect.php');
$connection = mysqli_connect('localhost', 'root', '');
$select_db = mysqli_select_db($connection, 'piscine');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "INSERT INTO utilisateur(Login, Mdp) VALUES ('$username','$password')";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);



echo "<script type='text/javascript'>alert('You Are Subscribed')</script>";


}
?>