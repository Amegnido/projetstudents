

<!DOCTYPE html> 
<html lang="en">
<head>

	<title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
    <title>INSCRIPTION </title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>
<body>

<header>
<div class="formulaire_inscription">

<div class="formulaire_text"> Register</div>

<div class="formulaire_saisie">

      <form method="POST" action="Connexion.php">

<label><b> Name</b></label> 
<input type="text" name="name" placeholder="Enter your Name"  required>

<label><b>Email</b></label>  
<input type="email" name="email" placeholder="Enter your mail" required>

<label><b>Password </b></label>
<input type="password" name="password" placeholder=" Enter your password" required>

<input type="submit" name="enregistrer" value="register" class="btnInscris"> 
You are registered?&nbsp; <a href="Connexion.php"> SIGN IN</a>

 </div>
   </div> 
   </div>
   </form>
  </header>

    <span id="result"></span>

<?php
include 'form_page.php';

if(isset($_POST['enregistrer'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);


$sql = "INSERT INTO student_table (name, email, password)
VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}else{
	echo "";
}


mysqli_close($conn);



?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>




