<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <h3>Dane użytkownika</h3>
    <form>
        <input type="text" name="name" placeholder="Imię" /><br><br>
        <input type="text" name="surname" placeholder="Nazwisko" /><br><br>
        <input type="text" name="nation" placeholder="Narodowość" /><br><br>
        <input type="submit" value="Wypełnij wszystkie dane" /><br><br>
    </form>

    <?php
    if (!empty($_GET['name']) && !empty($_GET['surname']) ) {
      echo <<< L
      <br>
      Imię i nazwisko: $_GET[name] $_GET[surname]
      L;
    }else {
      echo "Wypełnij wszystkie dane";
    }
    ?>
</body>
</html>
