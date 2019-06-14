<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>PHP partie 8 exercice 1</title>
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
      <p>Faire une page HTML permettant de donner à l'utilisateur :</p>
        <ul>
          <li>son User Agent</li>
          <li>son adresse ip</li>
          <li>le nom du serveur</li>
        </ul>
    </div>
    <div class="jumbotron jumbotron-light">
      <p><?=
     $_SERVER['HTTP_USER_AGENT'],
     $_SERVER['REMOTE_ADDR'],
     $_SERVER['PHP_SELF'];
       ?>
    </div>
  </body>
</html>
