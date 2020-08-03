<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";


$conn = new mysqli($servername, $username, $password, $dbname);


//$con = mysqli_connect('localhost', 'root', '');
// On selectionne la base de données souhaitée

mysqli_select_db($con, 'register');

//on vérifie si les champs de saisis ne sont pas vide
// les différents champs

$statement=$con->prepare("SELECT id, name, email FROM student WHERE email=:email and password=:password");
$statement->execute(['email' -> $email,'password' ->$password]);
$student =$statement  -> fetch();


  if(isset($student('id')) && isset($student('name')) && isset($student('email' ))){

    $statement=$con->prepare("SELECT Count(*) FROM attendance WHERE iduser=:iduser and datesign=date);
    $statement->execute(['iduser'-> $student['id'] , 'datesign' -> date("d-m-y")];

}
    $Nombre_Connexion =$statement  -> fetch() [0];

    if($con ==0)){

    }
    $id = $_POST['id'];
    $iduser = $_POST['iduser'];
    $datesign= date("y-m-d");
    $time= time("H:i:s");

    $sqp = "INSERT INTO attendance(id, iduser, date, time) VALUES('$id','$iduser';'$date','$time')";

    //on fait la requete d'insertion des informations 

    if(mysqli_query($con,$sql)) {
        header("location:attendance.php");
        
    }

?>