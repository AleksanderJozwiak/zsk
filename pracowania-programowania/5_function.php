<?php
  function dataFormat($data, $chars){
    $name = trim($data);
    $name = substr(ucwords(strtolower($data)), 0, $chars);
    return $data;
  }
 ?>
