<?php
    require_once 'connect.php';
    if (!empty($_GET['id'])) {
      $id = $_GET['id'];
      $sql = "DELETE FROM `user` WHERE `user`.`id` = $id";
      $connect -> query($sql);
      if($connect -> affected_rows > 0)
      {
        //header("location: ../db_table_delete.php?deleteUser=$id");
        //header("location: ../db_table_insert.php?deleteUser=$id");
        header("location: ../db_table_update.php?deleteUser=$id");
      }
      else {
        echo "Nie usunięto rekordu w db!";
      }
    }
    else {
      //header('location: ../db_table_delete.php');
      header('location: ../db_table_insert.php');
    }
 ?>
