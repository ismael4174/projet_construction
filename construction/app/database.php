<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=construction','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
  die('ERROR: '.$e->getMessage());
}



 ?>
