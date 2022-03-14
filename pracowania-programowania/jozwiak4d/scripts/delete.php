<?php
    require_once './../connect.php';

      $id = $_GET['id'];
      $tabela = $_GET['tabela'];
      $tabelaID = $_GET['tabelaID'];
      $admin = $_GET['admin'];

      $sql = "DELETE FROM $tabela WHERE $tabela.$tabelaID = $id";
      $connect -> query($sql);
      if($connect -> affected_rows > 0)
      {
        if($admin == 1)
          header("location: ../adminpage.php?deleteUser=$id");
        else {
          header("location: ../employeepage.php?deleteUser=$id");
        }
      }
      else {
        echo "Nie usunięto";
      }
 ?>
