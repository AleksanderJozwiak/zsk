<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>prostokat</title>
  </head>
  <body>
    prostokąt
    <form method="post">
      <input type="text" name="sideA" placeholder="Podja bok a"><br><br>
      <input type="text" name="sideB" placeholder="Podja bok b"><br><br>
      <input type="submit" value="Oblicz">
    </form>
    <?php
      if (!empty($_POST['sideA']) && !empty($_POST['sideB'])) {
        $area=$_POST['sideA'] * $_POST['sideB'];
        $circuit=2*$_POST['sideA']+2*$_POST['sideB'];
        echo <<< RESULT
          <hr>
          Pole prostokątu wynosi: $area cm<sup>2</sup><br>
          Obwód prostokątu wynosi: $circuit cm
RESULT;
      } else {
        echo "Proszę wypełnić pola";
      }
     ?>
  </body>
</html>
