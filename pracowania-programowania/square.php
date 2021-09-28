<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>kwadrat</title>
  </head>
  <body>
    kwadrat
    <form method="post">
      <input type="text" name="sideA" placeholder="Podja bok a"><br><br>
      <input type="submit" value="Oblicz">
    </form>
    <?php
      if (!empty($_POST['sideA'])) {
        $sideA=str_replace(',' , '.',$_POST['sideA']);
        $area=pow($sideA, 2);
        $circuit=4*$sideA;
        echo <<< RESULT
          <hr>
          Pole kwadratu wynosi: $area cm<sup>2</sup><br>
          Obwód kwadratu wynosi: $circuit cm
RESULT;
      } else {
        echo "Proszę wypełnić pola";
      }
     ?>
  </body>
</html>
