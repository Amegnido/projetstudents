<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <title> CONNEXION</title>

    <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>

<body>

<div class="formulaire_Connexion">

  <div class="formulaire_text">Connection</div>

  <div class="formulaire_saisie">

  <form method="POST" action="index.php">

  <label><b>Email</b></label>  
  <input type="Email" name="" placeholder="mail">

  <label><b>Password </b></label>
  <input type="password" name="" placeholder="password">

  <input type="submit" name="" value="Login" class="btnConnexion" >
You are not registered?&nbsp; <a href="fiche.php"> SIGN UP</a>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
  </form>
  </div>
</div>
<?php 
include('form_page.php')


?>
    
</body>

</html>