<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
    if (!isset($_POST['person']) && !isset($_POST['buttonAvg']))
    {
      echo <<< FORMCOUNTPERSON
      <h3>Ilość osób w rodzinie</h3>
      <form method="post">
      <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
      <input type="submit" value="Zatwierdź">
      </form>
      FORMCOUNTPERSON;
    }
  ?>
  <?php
    if (!empty($_POST['person'])) {
      echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";
      echo <<< FORMAGEPERSON
      <form method="post">
      FORMAGEPERSON;
      $count = $_POST['person'];
      for ($i=1; $i <= $count; $i++) {
        echo "<input type='number' name='person$i' placeholder='Podaj wiek osoby nr $i'><br><br>";
      }
      echo <<< FORMAGEPERSON
      <input type="submit" name="buttonAvg" value="Oblicz">
      </form>
      FORMAGEPERSON;
    }

    if (isset($_POST['buttonAvg'])) {
      $avg = 0;
      $count = 0;
      foreach ($_POST as $key => $value) {
        //echo '$key: $value<br>'
        if($key != 'buttonAvg')
        {
          $avg += $value;
          $count++;
        }
      }
      echo "Średni wiek ".numer_format($avg/$count, 2, " ")."<br>";
    }
   ?>
</body>
</html>
