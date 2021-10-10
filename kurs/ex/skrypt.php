<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole i obwód</title>
  </head>
  <body>
    <?php
    if (!empty($_POST['A']) && !empty($_POST['B'])) {
      $a=str_replace(",", ".", $_POST['A']);
      $b=str_replace(",", ".", $_POST['B']);
      $area=$a*$b;
      $rectangle=2*$a+2*$b;

      echo <<< RESULT
        Długość boków:<br>
        a = $a, b = $b<hr>
        Pole wynosi: $area cm<sup>2</sup><br>
        Obwód wynosi: $rectangle cm<br>
RESULT;
}else{
  echo "Wypelnij wszystkie dane prawidłowo!";
}
echo str_replace(",", ".", "3,5");


     ?>
     <a href="./4_area.php">Strona główna</a>

  </body>
</html>
