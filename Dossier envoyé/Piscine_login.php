<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #009999;
    color: white;
    padding: 20px 30px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #BDBDBD;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.logo{
    width: 300px;
    height: 150px;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
.wrapper {
    text-align: center;
}
.button4 {border-radius: 12px;}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

.buttonlogin{
    margin-top: 5%;
}
.buttoninscrire{
    margin-top: 5%;
    margin-left:30px;
}


</style>
</head>
<body style="background-color:powderblue;">

<h1 align="center"> Bienvenue sur</h1>

<div class= "imgcontainer">
    <img src="EceIn.png" class="logo">
</div>

<div class="wrapper">
<button class="button button4 buttonlogin" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
<button class="button button4 buttoninscrire" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">S'inscrire</button>
</div>
<div class="wrapper">
  <button class="button button4" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Administrateur</button>
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="authen_login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="logoin.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="user_id"><b>Identifiant</b></label>
      <input type="text" placeholder="Entrer l'identifiant" name="user_id" id="user_id" required>

      <label for="user_pass"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="user_pass" id="user_pass" required>
        
      <button type="submit">Connexion</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" method="post" action="Inscription.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="logoin.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">

      <label for="user_nom"><b>Nom</b></label>
      <input type="text" placeholder="Entrer votre nom" name="user_nom" required>

      <label for="user_prenom"><b>Prenom</b></label>
      <input type="text" placeholder="Entrer votre prenom" name="user_prenom" required>

      <label for="user_mail"><b>Adresse Mail</b></label>
      <input type="text" placeholder="Entrer votre adresse Mail" name="user_mail" required>

      <label for="user_id"><b>Identifiant</b></label>
      <input type="text" placeholder="Entrer l'identifiant" name="user_id" required>

      <label for="user_pass"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="user_pass" required>

      <label for="user_sexe"><b>Sexe</b></label>
      <input type="text" placeholder="Entrer votre sexe" name="user_sexe" required>

      <label for="user_naissance"><b>Date de naissance</b></label><br>
      <input type="Date" placeholder="Date de naissance" name="user_naissance" required><br><br>

      <label for="user_statut"><b>Statut</b></label>
      <input type="text" placeholder="Entrer votre statut" name="user_statut" required>

      <label for="user_adresse"><b>Entrer votre adresse</b></label>
      <input type="text" placeholder="Entrer votre adresse" name="user_adresse" required>

      <label for="user_couleur"><b>Couleur preférée</b></label>
      <input type="text" placeholder="Entrer votre couleur favorite" name="user_couleur" required>
        
      <button type="submit">Inscription</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div id="id03" class="modal">
  
  <form class="modal-content animate" method="post" action="authen_login_admin.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="logoin.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="user_id"><b>Identifiant</b></label>
      <input type="text" placeholder="Entrer l'identifiant" name="user_id" id="user_id" required>

      <label for="user_pass"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="user_pass" id="user_pass" required>
        
      <button type="submit">Connexion</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

</script>

</body>
</html>