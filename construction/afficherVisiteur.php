<?php
session_start();
if(!(isset(
  $_SESSION['Log']
  )))

header("location:connexion.php");
 ?>

<?php
require 'app/database.php';

$req = $db->query("SELECT * FROM visiteur");

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body style="background: url(images/bat.jpg)">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Batiplus <span class="blue"> + </span> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="deconnexion.php">DECONNEXION <span class="sr-only">(current)</span></a>
        </li>


      </ul>
    </div>
  </nav>
  <div id="titran" >
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titre" >
                    Liste <span>des visiteurs</span></div>
              </div>
          </div>
      </div><br>
    <table border="1" class="table table-striped table-dark " width="80%" >
      <tr>
        <th>Id Visiteur</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Message</th>
      </tr>
<?php
while($row = $req->fetch()){ ?>
  <tr>
    <td> <?php echo($row['Id_visiteur'])  ?> </td>
    <td> <?php echo($row['Nom'])  ?> </td>
    <td> <?php echo($row['Prenom'])  ?> </td>
    <td> <?php echo($row['Email'])  ?> </td>
    <td> <?php echo($row['Telephone'])  ?> </td>
    <td> <?php echo($row['Message'])  ?> </td>
    <td> <a href="supprimer.php?Id_visiteur=<?php echo($row['Id_visiteur'])  ?>">
       <button name="button" type="button" class="btn btn-warning">Supprimer</button>
     </a> </td>
  </tr>
<?php } ?>


</table>

</div>
<footer id="myFooter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <h5>A Propos</h5>
                    <p>Batiplus + est une entreprise de construction spécialisée dans le génie-civil, les travaux publics et divers. Nous maîtrisons une large palette de savoir-faire en construction et Rénovation de bâtiments, Electricité, Etude et Conception de Plans et Devis…
                    </p>

                </div>
                <div class="col-sm-4">
                    <h5>SERVICES</h5>
                    <ul>
                        <li><a href="#">Promotion immobilière</a></li>
                        <li><a href="#">Travaux de construction</a></li>
                        <li><a href="#">Réseaux routiers</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h5>NOS CONTACTS</h5>
                    <p>Sicogi, Non-loin du complexe sportif</p>
                    <p>Koumassi, Abidjan, Côte d'Ivoire</p>
                    <p>(+225) 88 41 41 55</p>
                    <p>info@batiplus.ci</p>
                </div>

            </div>
        </div>

    </footer>

<script src="myjavascript.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>
</html>
