<?php
if (!empty($_GET['name']) && !empty($_GET['nationallity']) && !empty($_GET['age'])) {
  &name = ucfirst(strtolower($_GET['name']));
  echo <<< L
  Imię: $_GET[name] <br>
  Narodowość: $_GET[nationallity] <br>
  Wiek: $_GET[age] <br>
  L;
}else {
  echo "Wypełnij wszystkie pola";
}
 ?>
