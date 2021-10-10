<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pole i obód kwadratu</title>
  </head>
  <body>
    <?php
    if (!empty($_POST['A'])) {
      $a=str_replace(",", ".", $_POST['A']);
      $area=number_format($a*$a, 2);
      $rectangle=number_format(4*$a, 2);

      echo <<< RESULT
      Pole Wynosi: $area cm<sup>2</sup><br>
      Obwód Wynosi: $rectangle cm<br>
      RESULT;
    }
  else {
    echo "Wypełnij Dane";
  }




      ?>

  </body>
</html>
