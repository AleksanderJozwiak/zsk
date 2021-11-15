<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <meta charset="utf-8">
  <title>Użytkownicy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  require_once 'scripts/connect.php';
  $sql = "SELECT * FROM `user`"; //TO NIE APOSTROFY TYLKO TO POD ~

  $rezultat = $connect->query($sql);

  if (isset($_GET['deleteUser'])) {
    echo "Usunięto użytkownika o id = $_GET[deleteUser]<hr>";
  }

  echo "<table>";
  echo <<< TABLE
    <tr>
        <th>Id</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th></th>
    </tr>
  TABLE;
  while($rows = $rezultat->fetch_assoc()){
    echo <<<ROW
    <tr>
        <td>
            $rows[id]
        </td>
        <td>
            $rows[name]
        </td>
        <td>
            $rows[surname]
        </td>
        <td>
            $rows[birthday]
        </td>
        <td>
          <a href="scripts/delete.php?id=$rows[id]">Usuń</a>
        </td>
    </tr>
    ROW;
  }
  echo "</table><hr>";
 ?>


</body>
</html>
