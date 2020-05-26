<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="pageConnexion.css" >
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

</br>
</br>
<div class="corpConnex">
<CENTER>
  <div class="form-group" style= width:250px;>
    <label for="exampleInputEmail1">Adresse email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons pas vos informations personneles.</small>
  </div>

  <div class="form-group" style= width:250px;>
  <label for="inputPassword5">Password</label>
  <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">

  <small id="passwordHelpBlock" class="form-text text-muted">  Si vous avez oublie votre mot de passe vous pouvez toujours cliquer sur le bouton en bas.</small>
  </div>
<a href="#">Mot de passe oublié</a>

</br>
<a href="#"><button type="button" class="btn btn-success"style="width: 8rem; margin-top: 30px; margin-bottom: 10px;">Se connecter</button></a>
<p>OU</p>
<a href="inscriptionsinama.html"><button type="button" class="btn btn-success"style="width: 8rem; margin-top: 0px; margin-bottom: 80px;">S'inscrire</button></a>
</div>
</CENTER>

  </body>
</html>
