<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/adminstyle.css">
  </head>
  <body>
    <?php require_once './connect.php'; ?>

    <h1>Zarządzaj pracownikami</h1>
    <button onclick="LoadDiv('pracownik')">Otwórz</button>

    <div class="manage" id="pracownik" style="overflow:scroll; height:400px; display: none;">
      <?php
        echo <<< ADD
        <h3>Dodaj pracownika</h3>
        <form action="./scripts/insert.php?tabela=pracownik&admin=1&tabelaID=PracownikID" method="post">
          <input type="text" name="name" placeholder="Podaj Imię">
          <input type="text" name="surname" placeholder="Podaj Nazwisko"><br><br>
          <input type="text" name="city" placeholder="Miasto">
          <input type="text" name="postid" placeholder="Kod pocztowy"><br><br>
          <input type="text" name="street" placeholder="Ulica"><br><br>
          <input type="email" name="email" placeholder="Podaj email">
          <input type="password" name="passwd" placeholder="Podaj hasło"><br><br>
          Płeć:
          <input type="radio" name="gender" value="K">K
          <input type="radio" name="gender" value="M">M
          <input type="submit" name="" value="Dodaj">
        </form><br>
        ADD;

        $sql = "SELECT * FROM `pracownik`;";
        $result = $connect->query($sql);
        echo <<< TABLE
        <table>
          <th>ID</th>
          <th>Imie</th>
          <th>Nazwisko</th>
          <th>Miasto</th>
          <th>KodPocztowy</th>
          <th>Ulica</th>
          <th>Email</th>
          <th>Haslo</th>
          <th>Plec</th>
        TABLE;
        while ($row = $result->fetch_assoc()) {
          echo <<< TABLE
          <tr>
            <td>$row[PracownikID]</td>
            <td>$row[Imie]</td>
            <td>$row[Nazwisko]</td>
            <td>$row[Miasto]</td>
            <td>$row[KodPocztowy]</td>
            <td>$row[Ulica]</td>
            <td>$row[Email]</td>
            <td>$row[Haslo]</td>
            <td>$row[Plec]</td>
            <td><a href="./scripts/delete.php?id=$row[PracownikID]&admin=1&tabela=pracownik&tabelaID=PracownikID">Usuń</a></td>
          </tr>
          TABLE;
        }
        echo "</table>";
       ?>
    </div>

    <h1>Zarządzaj produktami</h1>
    <button onclick="LoadDiv('produkt')">Otwórz</button>

    <div class="manage" id="produkt" style="overflow:scroll; height:400px; display: none;">

    </div>

    <h1>Zarządzaj klientami</h1>
    <button onclick="LoadDiv('klient')">Otwórz</button>

    <div class="manage" id="klient" style="overflow:scroll; height:400px; display: none;">
      <?php
        echo <<< ADD
        <h3>Dodaj Klienta</h3>
        <form action="./scripts/insert.php?tabela=klient&admin=1&tabelaID=KlientID" method="post">
          <input type="text" name="name" placeholder="Podaj Imię">
          <input type="text" name="surname" placeholder="Podaj Nazwisko"><br><br>
          <input type="text" name="city" placeholder="Miasto">
          <input type="text" name="postid" placeholder="Kod pocztowy"><br><br>
          <input type="text" name="street" placeholder="Ulica"><br><br>
          <input type="email" name="email" placeholder="Podaj email">
          <input type="password" name="passwd" placeholder="Podaj hasło"><br><br>
          Płeć:
          <input type="radio" name="gender" value="K">K
          <input type="radio" name="gender" value="M">M
          <input type="submit" name="" value="Dodaj">
        </form><br>
        ADD;

        $sql = "SELECT * FROM `klient`;";
        $result = $connect->query($sql);
        echo <<< TABLE
        <table>
          <th>ID</th>
          <th>Imie</th>
          <th>Nazwisko</th>
          <th>Miasto</th>
          <th>KodPocztowy</th>
          <th>Ulica</th>
          <th>Email</th>
          <th>Haslo</th>
          <th>Plec</th>
        TABLE;
        while ($row = $result->fetch_assoc()) {
          echo <<< TABLE
          <tr>
            <td>$row[KlientID]</td>
            <td>$row[Imie]</td>
            <td>$row[Nazwisko]</td>
            <td>$row[Miasto]</td>
            <td>$row[KodPocztowy]</td>
            <td>$row[Ulica]</td>
            <td>$row[Email]</td>
            <td>$row[Haslo]</td>
            <td>$row[Plec]</td>
            <td><a href="./scripts/delete.php?id=$row[KlientID]&admin=1&tabela=klient&tabelaID=KlientID">Usuń</a></td>
          </tr>
          TABLE;
        }
        echo "</table>";
       ?>
    </div>

    <h1>Zarządzaj zamówieniami</h1>
    <button onclick="LoadDiv('zamowienia')">Otwórz</button>

    <div class="manage" id="zamowienia" style="overflow:scroll; height:400px; display: none;">
      <?php
        echo "<br><br>";
        $sql = "SELECT * FROM `zamowienia`;";
        $result = $connect->query($sql);
        echo <<< TABLE
        <table>
          <th>ID</th>
          <th>DataZamowienia</th>
          <th>KlientID</th>
          <th>PlatnoscID</th>
        TABLE;
        while ($row = $result->fetch_assoc()) {
          echo <<< TABLE
          <tr>
            <td>$row[ZamowienieID]</td>
            <td>$row[DataZamowienia]</td>
            <td>$row[KlientID]</td>
            <td>$row[PlatnoscID]</td>
            <td><a href="./scripts/delete.php?id=$row[KlientID]&admin=1&tabela=klient&tabelaID=KlientID">Usuń</a></td>
          </tr>
          TABLE;
        }
        echo "</table>";
       ?>
    </div>

    <script type="text/javascript">
      function LoadDiv(divid) {
          var x = document.getElementById(divid);
          if(x.style.display != "block")
            x.style.display = "block";
          else {
            x.style.display = "none";
          }
      }
    </script>
  </body>
</html>
