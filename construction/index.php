
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page d'acceuil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body style="background: url(images/champ.jpg)">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Batiplus <span class="blue"> + </span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">ACCEUIL <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="connexion.php">administrateur</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="promotion.php">Promotion immobilière</a>
          <a class="dropdown-item" href="travaux.php">Travaux de construction</a>
          <a class="dropdown-item" href="reseaux.php
          ">Réseaux routiers</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" href="#myModal">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>

<div class="bd-example" >
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
</ol>
<div class="carousel-inner" >
  <div class="carousel-item active">
    <img src="images/promotion.jpg" class="d-block w-100" style="background-size:cover">
    <div class="carousel-caption d-none d-md-block">
      <h5>Promotion immobilière</h5>
    </div>
  </div>
  <div class="carousel-item">
    <img src="images/travaux.jpg" class="d-block w-100" style="background-size:cover">
    <div class="carousel-caption d-none d-md-block">
      <h5>Travaux de construction</h5>
    </div>
    </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Suivant</span>
  </a>
</div>

<br><br><br>
<div class="card-deck">
  <div class="card">
    <img src="images/construction.jpg" class="card-img-top">
    <div class="card-body">
      <h2 class="card-title">Construction</h2>
    </div>
  </div>
  <div class="card">
    <img src="images/renovation.jpg" class="card-img-top">
    <div class="card-body">
      <h2 class="card-title">Rénovation</h2>
    </div>
  </div>
  <div class="card">
    <img src="images/design.jpg" class="card-img-top" >
    <div class="card-body">
      <h2 class="card-title">Design intérieur</h2>
    </div>
  </div>
</div>

</div>
<br>
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images/batiment.jpg" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="" style="text-align:left; color: #111e33">La
        <em style="color: #ef7922;">construction moderne</em>
           de haute qualité à un prix social</h2>
        <p class="card-text">
          Le principal objectif de BatiPlus consiste à construire des ouvrages de qualité au prix le plus économique possible, pour offrir à nos clients le meilleur rapport qualité/prix de la sous-région.<br><br>

Afin de mener votre projet à son terme, conformément à vos souhaits, nous associons à nos actions des partenaires dotés de grandes qualités et d’un degré de professionnalisme très élevé.<br><br>

Notre but est de recueillir, avant tout, la satisfaction de notre clientèle par la mise en œuvre de nos meilleures compétences et de mettre à sa disposition toute notre énergie afin d’honorer nos engagements en qualité, coûts et délais.
        </p>
            </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NOUS CONTACTEZ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="info-form" action="index.php" method="POST">
  <div class="form-row">
    <?php
    require 'app/database.php';
    if (isset($_POST['Submit'])){

    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $email = $_POST['Email'];
    $telephone = $_POST['Telephone'];
    $message = $_POST['Message'];

    $req = $db->query("INSERT INTO visiteur(Nom,Prenom,Email,Telephone,Message)
    values('$nom','$prenom','$email','$telephone','$message')");
    }

    ?>
    <div class="col">
      <input type="text" name="Nom" id="Nom" class="form-control" placeholder="Nom">
    </div>
    <div class="col">
      <input type="text" name="Prenom" id="Prenom" class="form-control" placeholder="Prenom">
    </div>
  </div><br>
  <div class="form-row">
    <div class="col">
      <input type="email" name="Email" id="Email" class="form-control" placeholder="E-mail">
    </div>
    <div class="col">
      <input type="text" name="Telephone" id="Telephone" class="form-control" placeholder="Téléphone">
    </div>
  </div><br>
  <div class="form-row">
    <div class="col">
      <textarea name="Message" id="Message" class="form-control" placeholder="Message"></textarea>
    </div>
    </div><br>
    <button type="submit" name="Submit" onclick="envoyer()" class="btn btn-primary">ENVOYER</button>

</form>
      </div>
      </div>
    </div>
  </div>
<br>
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
