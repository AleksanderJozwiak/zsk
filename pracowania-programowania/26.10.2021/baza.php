<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <meta charset="utf-8">
  <title>Użytkownicy</title>
</head>
<body>

<?php
  $connect = new mysqli("localhost","root","","zsk_4dg1_baza1");//serwer-user-hasło-baza
  $sql = "SELECT * FROM `user`"; //TO NIE APOSTROFY TYLKO TO POD ~

  $rezultat = $connect->query($sql);

  while($rows = $rezultat->fetch_assoc()){
    echo <<<ROW
    Id:
    $rows[id]
    <br>
    Imię:
    $rows[name]
    <br>
    Nazwisko:
    $rows[surname]
    <br>
    Data urodzenia:
    $rows[birthday]
    <br>
    <br>
    ROW;
  }

 ?>

</body>
</html>