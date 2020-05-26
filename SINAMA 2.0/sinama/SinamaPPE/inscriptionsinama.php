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
<a class="btConnexion" href="pageconnexionsinama.php" >&nbsp;CONNEXION&nbsp;</a>
<img src="logociné2.png" alt="" width="200" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php
   include 'scriptphp\bandeau.php';

?>



<!-- image qui défile sur les évènements et autres PROMOTIONS et OFFRES-->

<div style="text-align: center; width: 200px; margin : auto;">
<br>
<h2>Inscription</h2>
<form action="creecomptephp.php" method="post" class="needs-validation" novalidate>
  <div class="nomETprenom">
  <div class="form-row">

    <div class="col-md-4 mb-3" style="min-width:215px;">
      <label  for="nom">Nom</label>
      <input type="text" name="nom" class="form-control" id="validationCustom01" placeholder="First name" required>
    </div>

    <div class="col-md-4 mb-3" style="min-width:215px;">
      <label for="prenom">Prenom</label>
      <input type="text" name ="prenom"class="form-control" id="validationCustom02" placeholder="prenom"  required>
    </div>

  <div class="form-group">
    <label for="email">Adresse email</label>
    <input type="email" name= "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
  </div>
</div>
  <div class="form-group">
<label for="motdepasse">Password</label>
<input name="motdepasse" type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">

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

<button  type="submit" name="valider" class="btn btn-success"style="width: 13rem; margin-top: 30px; margin-bottom: 80px;">Soumettre le formulaire</button>

</div>
</form>

</br>

</body>
</html>
