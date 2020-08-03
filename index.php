<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <title>REMERCIEMENT</title>

    <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>

<body>

<div class="thank">

  <div class="formulaire_text"></div>

  <div class="formulaire_saisie">

  <form method="POST" action="fiche.php">


<p> <h3>  Thank you for signing!!</br> 
<?php echo "To day is ".date('d-m-y')." It is ".date('H:i:s') ?> </h3> </p>

<a href="fiche.php"> <input type="submit" id='submit' value='OK' class="btnThank"></a>

</form>
</div>
</body>
</html>

    