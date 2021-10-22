<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Danne samochodu</title>
  </head>
  <body>
    <?php
    if (!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["marka"]) && !empty($_POST["model"]) && !empty($_POST["color"]) && !empty($_POST["year"])) {
      $howManyYear = date("Y") - (int) $_POST["year"];
      if ($howManyYear < 20) {
        $string = "Masz nowe auto";
        // code...
      } else {
        $string = "Musisz kupić nowe auto";
        // code...
      }
      echo <<< OUT
        Danne: <br>
        Imię i Nazwisko : $_POST[name] $_POST[surname] <br>
        Marka : $_POST[marka] <br>
        Model : $_POST[model] <br>
        Kolor : $_POST[color] <br>
        Rok produkcji : $_POST[year] <br>
        Twoje auto ma $howManyYear lat - $string
      OUT;
    }

     ?>

  </body>
</html>
