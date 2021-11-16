<?php
  if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
      if (empty($value)) {
        header('location: ../db_table_update.php?error=Wypełnij wszystkie pola&updateUser=');
        exit();
      }
    }
      require_once "connect.php";
      $sql = "UPDATE `user` SET `id` = '$_POST[id]', `name` = '$_POST[name]', `surname` = '$_POST[surname]', `birthday` = '$_POST[birthday]', `height` = '$_POST[height]', `cityid` = '$_POST[cityid]' WHERE `user`.`id` = '$_POST[id]';"
      $connect->query($sql);

      if($connect->affected_rows){
        header('location: ../db_table_update.php?error=Prawidłowo zaktualizowano użytkownika');
      }
      else {
        header('location: ../db_table_update.php?error=Nie udało się zaktualizować użytkownika');
      }
  }
 ?>
