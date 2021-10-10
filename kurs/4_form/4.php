<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="get">
      <input type="text" name="name" placeholder="podaj imię (max. 10 znaków)"><br><br>
      <input type="text" name="surname" placeholder="podaj nazwisko"><br><br>
      <input type="radio" name="gender" value="m" checked>mężczyzna
      <input type="radio" name="gender" value="w">kobieta<br><br>
      <select name="nationality">
        <option value="polska">Polska</option>
        <option value="ukraińska">Ukraińska</option>
      </select> Narodowość<br><br>
          <input type="color" name="color">Ulubiony kolor<br><br>
          <input type="submit" name="chek" value="Zatwierdż"
      <input type="submit" name="button" value="Zatwierdż"><hr>
    </form>

    <?php
    if (isset($_GET['button'])) {

    }
    if (!empty($_GET['name']) && !empty($_GET['surname']) &&
    !empty($_GET['gender'])&& !empty($_GET['nationality']) &&
    !empty($_GET['color'])) {
      $name = trim($_GET['name']);
      $name = substr(ucfirst(strtolower($name)), 0, 10);
      $surname = trim($_GET['surname']);
      $surname = substr(ucfirst(strtolower($surname)), o, 10);
      switch ($_GET['gender']) {
        case 'm':
          $gender='mężczyzna';
          break;
        case 'w':
          $gender='kobieta';
          break;
      }
      echo strlen($name);
      echo strlen($surname);
      echo <<< DATA
      Twoje imię i nazwisko: $_GET[name] $_GET[surname]<br>
      Płeć: $gender<br>
      Narodowość: $_GET[nationality]
      Ulubiony kolor: $_GET[color]
DATA;
}else{
  echo "Wypełnij dane!";
   }
       ?>


  </body>
</html>
