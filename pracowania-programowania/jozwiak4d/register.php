<!DOCTYPE html>
<html lang="pl-PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Zarejestruj się</title>
  </head>
  <?php require_once './connect.php'; ?>
  <body>
    <div id="regWindow">
      <h1>Zarejestruj się</h1>
      <form class="register" action="register.php" method="post">
        <input type="text" name="name" placeholder="Podaj Imię">
        <input type="text" name="surname" placeholder="Podaj Nazwisko"><br><br>
        <input type="text" name="city" placeholder="Miasto">
        <input type="text" name="postid" placeholder="Kod pocztowy"><br><br>
        <input type="text" name="street" placeholder="Ulica"><br><br>
        <input type="email" name="email" placeholder="Podaj email">
        <input type="email" name="emailRepeat" placeholder="Powtórz email"><br><br>
        <input type="password" name="passwd" placeholder="Podaj hasło">
        <input type="password" name="passwdRepeat" placeholder="Powtórz hasło"><br><br>
        Płeć: <br>
        <input type="radio" name="gender" value="K">K
        <input type="radio" name="gender" value="M">M
        <br><br>
        <input type="submit" name="subbtn" value="Zarejestruj">
      </form>
      <p id="valid"></p>
    </div>

    <?php
    if(!empty($_POST)){
      foreach ($_POST as $key => $value) {
        if (empty($value)) {
          ?>
          <script>
          var x = document.getElementById('valid');
          x.innerHTML = "Proszę wprowadzić wszystkie dane";
          </script>
          <?php
        }
      }
          if ($_POST['email'] == $_POST['emailRepeat'] && !empty($value)) {
            if ($_POST['passwd'] == $_POST['passwdRepeat']) {
              $pass = password_hash($_POST['passwd'], PASSWORD_ARGON2I);
              if(!empty($_POST['gender'])) {
                $gender = $_POST['gender'];
                $sql = "INSERT INTO `klient`(`KlientID`, `Imie`, `Nazwisko`, `Miasto`, `KodPocztowy`, `Ulica`, `Email`, `Haslo`, `Plec`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[city]', '$_POST[postid]', '$_POST[street]', '$_POST[email]', '$pass', '$gender');";
                $connect->query($sql);
                header('location: ./login.php?Utworzono-konto');
              }
            }
            else {
              ?>
              <script>
              var x = document.getElementById('valid');
              x.innerHTML = "Proszę wprowadzić takie same hasła";
              </script>
              <?php
            }
          }
          else {
            ?>
            <script>
            var x = document.getElementById('valid');
            x.innerHTML = "Proszę wprowadzić takie sama Emaile";
            </script>
            <?php
          }
      }
     ?>

    <a href="index.php"><button>Powrót</button></a>
  </body>
</html>
