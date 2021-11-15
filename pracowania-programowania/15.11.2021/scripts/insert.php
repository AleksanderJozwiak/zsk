<?php
  if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        header('location: ../db_table_insert.php?error=Wypełnij wszystkie pola&addUser=');
        exit();
      }
    }
      require_once "connect.php";
      $sql = "INSERT INTO `users`(`id`, `cityid`, `name`, `surname`, `birthday`, `height`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', '$_POST[height]')";
      $connect->query($sql);

      if($connect->affected_rows){
        header('location: ../db_table_insert.php?error=Prawidłowo dodano użytkownika');
      }
      else {
        header('location: ../db_table_insert.php?error=Nie udało się dodać użytkownika');
      }
  }
 ?>
