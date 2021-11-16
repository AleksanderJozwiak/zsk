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
  $sql = "SELECT * FROM `user` INNER JOIN `cities` on `user`.`cityid` = `cities`.`cityid`"; //TO NIE APOSTROFY TYLKO TO POD ~

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
        <th>Wzrost</th>
        <th>Miasto</th>
        <th></th>
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
            $rows[height]
        </td>
        <td>
            $rows[city]
        </td>
        <td>
          <a href="scripts/delete.php?id=$rows[id]">Usuń</a>
        </td>
        <td>
          <a href="db_table_update.php?updateUser=$rows[id]">Aktualizuj</a>
        </td>
    </tr>
    ROW;
  }
  echo "</table><hr>";

  if (!isset($_GET['addUser'])) {
    echo '<a href="db_table_update.php?addUser=">Dodawanie użytkownika</a>';
  }else {
    if(isset($_GET['error'])) {
      echo "$_GET[error]<br>";
    }
    echo <<< ADDUSERFORM
    <h4>Dodawanie użytkownika</4><br>
    <form action="./scripts/insert.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
       <select name="cityid">
    ADDUSERFORM;
    $sql ="SELECT * FROM `cities`";
    $result=$connect->query($sql);
    while ($city = $result->fetch_assoc()) {
      echo "<option value='$city[cityid]''>$city[city]</option>";
    }
    echo <<< ADDUSERFORM
      </select>
      <input type="date" name="birthday" placeholder="Data urodzenia"><br><br>
      <input type="number" name="height" placeholder="Podaj wzrost"><br><br>
      <input type="submit" value="Dodaj użytkownika">
    </form>
    ADDUSERFORM;
  }

  if (!empty($_GET['updateUser'])) {
    $sql = "SELECT * FROM `user` WHERE `id` = $_GET[updateUser]";
    $result = $connect->query($sql);
    $updateUser = $result->fetch_assoc();

    echo <<< EDITUSERFORM
    <h4>Aktualizacja użytkownika o id = '$_GET[updateUser]'</4><br>
    <form action="./scripts/update.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię" value="$updateUser[name]"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko" value="$updateUser[surname]"><br><br>
       <select name="cityid">
    EDITUSERFORM;
    $sql ="SELECT * FROM `cities`";
    $result=$connect->query($sql);
    while ($city = $result->fetch_assoc()) {
      if ($city['cityid'] == $updateUser['cityid']) {
        echo "<option value='$city[cityid]' selected>$city[city]</option>";
      }else {
        echo "<option value='$city[cityid]'>$city[city]</option>";
      }
    }
    echo <<< EDITUSERFORM
      </select>
      <input type="date" name="birthday" placeholder="Data urodzenia" value="$updateUser[birthday]"><br><br>
      <input type="number" name="height" placeholder="Podaj wzrost" value="$updateUser[height]"><br><br>
      <input type="submit" value="Aktualizuj użytkownika">
    </form>
    EDITUSERFORM;
  }

 ?>

</html>
