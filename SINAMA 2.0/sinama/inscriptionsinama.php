<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="inscriptionsinama.css" >
    <title>Sinama</title>
  </head>
  <body>
    <!-- je veux un bouton pour qu'il puisse s'inscrire au dessus de la barre ! -->
<a class="btConnexion" href="pageConnexion.html" >&nbsp;CONNEXION&nbsp;</a>
<img src="logociné2.png" alt="" width="200" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- la navbar de l'accueil du site -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" width="170"> <!-- controle la couleur de la nav bar-->
  <a class="navbar-brand" href="pageaccueilsinama.html"><img src="logocine2copie.png" width="170"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="pageaccueilsinama.html">ACCUEIL<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">FILMS & ÉVÈNEMENTS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">OFFRES ET PROMOTIONS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">TARIFS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">NOUS CONTACTER<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </div>
</nav>

<!-- image qui défile sur les évènements et autres PROMOTIONS et OFFRES-->

<div style="text-align: center; width: 200px; margin : auto;">
<br>
<h2>Inscription</h2>
<form class="needs-validation" novalidate>
  <div class="nomETprenom">
  <div class="form-row">

    <div class="col-md-4 mb-3" style="min-width:215px;">
      <label  for="validationCustom01">Nom</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Entrez votre NOM" required>
    </div>

    <div class="col-md-4 mb-3" style="min-width:215px;">
      <label for="validationCustom02">Prenom</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Entrez votre PRENOM" required>
    </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Adresse email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
  </div>
</div>
  <div class="form-group">
<label for="inputPassword5">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">

<small id="passwordHelpBlock" class="form-text text-muted">  Votre mot de passe doit comporter de 8 à 20 caractères, contenir des lettres et des chiffres, et ne doit pas contenir d'espaces, de caractères spéciaux ou d'emoji.</small>
</div>
</br>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Accepter les termes et conditions
      </label>
    </div>
  </div>
</div>

<a href="pageaccueilsinama.html"><button type="button" class="btn btn-success"style="width: 13rem; margin-top: 30px; margin-bottom: 80px;">Soumettre le formulaire</button></a>

</div>
</form>

</br>

</body>
</html>
