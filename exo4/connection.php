<?php
$_COOKIE['login'] = $_POST['firstname'];
$_COOKIE['pass'] = $_POST['password'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>PHP partie 8 exercice 4</title>
  <style media="screen">
  .color {
    background-color: grey;
    font-weight: 400;
    border: 3px solid black;
    margin: 20px;
    padding: 20px;
    text-align: center;
    border-radius: 100px;
    font-weight: bolder;
  }
  .white {
    color: white;
  }
  </style>
</head>
<body>
  <div class="color">
    <p class="text-center">Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
  </div>
  <?php
  if (empty($_COOKIE['login']) && empty($_COOKIE['pass'])) {?>
    <p class="text-center"> <?= "Un problème est survenu pendant le chargement de vos cookies"; ?> </p>
       <?php include('form.php');
      } else { ?>
    <p class="text-center">Voici vos information de connection : <?= $_COOKIE['login']; ?></p>
    <p class="text-center">Ainsi que votre mot de passe : <?= $_COOKIE['pass']; ?></p>
  <?php } ?>
</body>
</html>
