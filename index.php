<?php
$departments = array(
  //index sera 02,60 etc et la valeur Aisne, Somme...
 '02' => 'Aisne',
 '80' => 'Somme',
 '60' => 'Oise',
 '62' => 'Pas-de-Calais',
 '59' => 'Nord',)
?>
<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie3 Exo4</title>
  </head>
  <body>
    <?php
      //lecture du tableau ligne par ligne
      foreach($departments as $value => $element)
       {
        echo $value . ' a le numero de département ' . $element . '<br />';
       }
      ?>
  </body>
</html>
