<?php
require 'app/database.php';
$login = $_POST['Login'];
$mdp = $_POST['Password'];

$pc = md5($mdp);

$req = $db->query("SELECT * FROM admin WHERE Login='$login' AND Password='$pc'");

if ($row = $req->fetch()) {
  session_start();
  $_SESSION['Log']=$row;

header("location:afficherVisiteur.php");
}
else{
  alert("Vous n'êtes pas un administrateur") ;
  header("location:connexion.php");
}



 ?>
