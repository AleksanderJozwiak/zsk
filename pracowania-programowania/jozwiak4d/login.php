<!DOCTYPE html>
<html lang="pl-PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Zaloguj się</title>
  </head>
  <body>
    <div id="regWindow">
      <h1>Zaloguj się</h1>
      <form class="register" action="login.php" method="post">
        <input type="email" name="email" placeholder="Podaj email"><br><br>
        <input type="password" name="passwd" placeholder="Podaj hasło"><br><br>
        <input type="submit" name="subbtn" value="Zaloguj">
        <a href="#">Odzyskaj hasło</a>
      </form>
      <p id='valid'></p>
    </div>

    <?php
    require_once './connect.php';

    if(!empty($_POST['email']) && !empty($_POST['passwd'])){
      if ($_POST['email'] == 'a@dmin' && $_POST['passwd'] == 'admin') {
        header('location: ./adminpage.php');
      }
      $sql = "SELECT `Haslo`, `Email` FROM `klient` WHERE `Email` LIKE '$_POST[email]';";
      $result = $connect->query($sql);
      $w = $result->fetch_assoc();
      $pass = password_hash($_POST['passwd'], PASSWORD_ARGON2I);
      if(isset($w['Email'])){
          if (password_verify($_POST['passwd'], $w['Haslo'])) {
            //utwórz sesje
            echo "Zalogowano";
          } else {
            ?>
            <script>
            var x = document.getElementById('valid');
            x.innerHTML = "Nieprawidłowe dane";
            </script>
            <?php
          }
      } else {
        $sql = "SELECT `Haslo`, `Email` FROM `pracownik` WHERE `Email` LIKE '$_POST[email]';";
        $result = $connect->query($sql);
        $w = $result->fetch_assoc();
        $pass = password_hash($_POST['passwd'], PASSWORD_ARGON2I);
        if(isset($w['Email'])){
            if (password_verify($_POST['passwd'], $w['Haslo'])) {
              header('location: ./employeepage.php');
            } else {
              ?>
              <script>
              var x = document.getElementById('valid');
              x.innerHTML = "Nieprawidłowe dane";
              </script>
              <?php
            }
        }
        ?>
        <script>
        var x = document.getElementById('valid');
        x.innerHTML = "Nieprawidłowy dane";
        </script>
        <?php
      }

    }else if (isset($_POST['subbtn'])){
      ?>
      <script>
      var x = document.getElementById('valid');
      x.innerHTML = "Wprowadź dane";
      </script>
      <?php
    }
     ?>
    <a href="index.php"><button>Powrót</button></a>
  </body>
</html>
