<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <meta charset="utf-8">
  <title>Użytkownicy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  $connect = new mysqli("localhost","root","","zsk_4dg1_baza1");//serwer-user-hasło-baza
  $sql = "SELECT * FROM `user`"; //TO NIE APOSTROFY TYLKO TO POD ~

  $rezultat = $connect->query($sql);
    
    
  echo "<table>";
  echo <<< TABLE
    <tr>
        <th>Id</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
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
    </tr>
    
    ROW;
  }
  echo "</table>";
 ?>

</body>
</html>