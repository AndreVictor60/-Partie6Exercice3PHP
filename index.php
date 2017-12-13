<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 6 Exercice 3</title>
  </head>
  <body>
    <a href='index.php?dateDebut=2/05/2016&dateFin=27/11/2016'>Date</a>
    <?php
      if (isset($_GET['dateDebut']) AND isset($_GET['dateFin']))
      {
        echo $_GET['dateDebut'].' '. $_GET['dateFin'];
      }
      else
      {
        echo 'Il y a une erreur !';
      }
     ?>
  </body>
</html>
