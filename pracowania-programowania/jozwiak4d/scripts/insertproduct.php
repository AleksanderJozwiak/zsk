<?php
  if(!empty($_POST)){
      require_once "./../connect.php";
      $admin = $_GET['admin'];
      $sql = "INSERT INTO `produkt` (`ProduktID`, `Nazwa`, `Opis`, `Zdjecie`, `CenaJednostkowa`, `StanMagazynu`, `KategoriaID`, `ZamowieniaID`) VALUES (NULL, '$_POST[name]', '$_POST[descripton]', '$_POST[img]', '$_POST[price]', '$_POST[amount]', '$_POST[kategoriaid]', NULL);";
      $connect->query($sql);

      if($connect->affected_rows){
        if($admin == 1)
          header("location: ../adminpage.php?Dodano_produkt");
        else {
          header("location: ../employeepage.php?Dodano_produkt");
        }
      }
  }
 ?>
