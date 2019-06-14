<?php
if (isset($_POST['firstname']) && isset($_POST['password'])) {
  setcookie('login', $_POST['firstname'], time() + 3600);
  $_COOKIE['prenom'] = $_POST['firstname'];
  setcookie('pass', $_POST['password'],time() + 3600);
  $_COOKIE['password'] = $_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>PHP partie 8 exercice 5</title>
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
      <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
    </div>
    <?php include('form.php'); ?>
  </body>
</html>
