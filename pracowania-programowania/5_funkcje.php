<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="submit" name="button" value="Zatwierdź"><br><br>
    </form>
    <?php
      if (isset($_POST['button'])){
        require_once '5_function.php';
        $name = dataFormat($_POST['name'], 10);
        $surname = dataFormat($_POST['surname'], 10);
      }
     ?>
  </body>
</html>
