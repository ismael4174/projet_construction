<?php
require 'app/database.php';
$id = $_GET['Id_visiteur'];
$req = $db->query("DELETE FROM visiteur WHERE (Id_visiteur=$id)");
$req->execute();

header("location:afficherVisiteur.php");
//require 'afficherPersonne.php';
 ?>
