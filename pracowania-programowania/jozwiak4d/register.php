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
        <input type="text" name="name" placeholder="Podaj Imię"><br><br>
        <input type="text" name="surname" placeholder="Podaj Nazwisko"><br><br>
        <input type="email" name="email" placeholder="Podaj email"><br><br>
        <input type="email" name="emailRepeat" placeholder="Powtórz email"><br><br>
        <input type="password" name="passwd" placeholder="Podaj hasło"><br><br>
        <input type="password" name="passwdRepeat" placeholder="Powtórz hasło"><br><br>
        Płeć: <br>
        <input type="radio" name="sex" value="K">K
        <input type="radio" name="sex" value="M">M
        <br><br>
        <input type="submit" name="" value="Zarejestruj">
      </form>
    </div>
    <p></p>
    <a href="index.php"><button>Powrót</button></a>
  </body>
</html>
