<?php
  if(!empty($_POST)){
      require_once "./../connect.php";
      $tabela = $_GET['tabela'];
      $tabelaID = $_GET['tabelaID'];
      $admin = $_GET['admin'];
      $pass = password_hash($_POST['passwd'], PASSWORD_ARGON2I);
      $sql = "INSERT INTO $tabela($tabelaID, `Imie`, `Nazwisko`, `Miasto`, `KodPocztowy`, `Ulica`, `Email`, `Haslo`, `Plec`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[city]', '$_POST[postid]', '$_POST[street]', '$_POST[email]', '$pass', '$_POST[sex]');";
      $connect->query($sql);

      if($connect->affected_rows){
        if($admin == 1)
          header("location: ../adminpage.php?Dodano_uzytkownika&$pass");
        else {
          header("location: ../employeepage.php?Dodano_uzytkownika");
        }
      }
  }
 ?>
