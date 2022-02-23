<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styl.css">
    <title>Dziennik lekcyjny - Caktus</title>
  </head>
  <body>
    <header>
      <img src="" alt="logo">
    </header>
    <main>
      <button type="button" name="logIn" onclick="show()">Zaloguj się</button>
      <form class="form1" action="login.php" method="post">
        <input type="text" name="username" value="">
        <input type="text" name="passwd" value="">
        <input type="submit" name="subbtn" value="Zaloguj">
      </form>
      <script type="text/javascript">
        function show () {
          var form = document.getElementsByClassName('form1')[0];
          var button = document.getElementsByName('logIn')[0];
          form.style.display = "block";
          button.style.display = "none";
        }
      </script>
    </main>
    <footer>
      Kontakt itp
    </footer>
  </body>
</html>
