<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Tiger-kom</title>
  </head>
  <body>
    <?php require_once "./connect.php"; ?>
    <header>Tiger-kom
      <a href="index.php"><img src="./image/logo.png" alt="logo" height="75px" width="75px"></a>
      <div class="search">
        <form class="" action="index.html" method="post">
          <input type="text" name="" value="" placeholder="..." id="searchBar">
          <input type="button" name="" value="Szukaj">
        </form>
      </div>
      <div class="account">
        <a href="login.php"><button>Zaloguj</button></a>
        <a href="register.php"><button>Zarejestruj się</button></a>
      </div>
    </header>
    <main>
      <table>
        <?php
        $sql = "SELECT * FROM `produkt` WHERE `KategoriaID` = '$_GET[id]'";
        $result = $connect->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo <<< TABLE
          <tr>
            <td>$row[Nazwa]</td>
            <td>$row[CenaJednostkowa]zł</td>
            <td style="color: #AAAAAA; font-size: 1em;">Stan Magazynu: $row[StanMagazynu]</td>
            <td><img src="./image/$row[Zdjecie]" alt="$row[Zdjecie]" width="100%" height="200px"></td>
            <td><a href="#"><button>...</button></a></td>
          </tr>
          TABLE;
        }
        mysqli_close($connect);
         ?>
      </table>
    </main>
    <footer>
      Kontakt
      O nas
    </footer>
  </body>
</html>
