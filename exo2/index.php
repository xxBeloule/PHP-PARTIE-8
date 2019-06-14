<?php session_start();
// Demarre une nouvelle session afin de pouvoir transmettre des données dans nimporte quelle page qui contiendrait le session_start()

$_SESSION['firstname']="Jean";
$_SESSION['name']="Dupont";
$_SESSION['age']=20;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP partie 8 exercice 2</title>
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
      <p><?= 'Bonjour '. $_SESSION['firstname'].' '.$_SESSION['name'].' tu as '.$_SESSION['age']; ?> </p>
      <a href="connection.php">Lien vers autre page ou la séssion sera gardée</a>
    </div>
  </body>
</html>
