<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Sklep komputerowy</title>
  </head>
  <body>
    <header>
      <img src="" alt="logo">
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
        <tr>
          <td><?php echo $_GET['id']; ?></td>
          <td><?php echo $_GET['id']; ?></td>
          <td><?php echo $_GET['id']; ?></td>
        </tr>
      </table>
    </main>
    <footer>
      Kontakt
      O nas
    </footer>
  </body>
</html>
