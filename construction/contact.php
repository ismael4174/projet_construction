

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Promotion immobilière</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background: url(images/batiment.jpg)">
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Batiplus <span class="blue"> + </span> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">ACCEUIL <span class="sr-only">(current)</span></a>
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
          <a class="dropdown-item" href="reseaux.php">Réseaux routiers</a>
        </div>
      </li>

    </ul>
  </div>
</nav>

<div id="titran" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titre" >
                  Nous <span>Contactez</span></div>
            </div>
        </div>
    </div><br>
  <div class="container rounded" style="background-color: #fff">
    <form id="info-form" action="index.php" method="POST">

    <div class="form-row">

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

<footer id="myFooter" style="background-color: #fff">
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

  </body>
</html>
