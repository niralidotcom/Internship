<?php
//Associative array

$age = array("amisha"=>"10", "nirali"=>"12", "asha"=>"25");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }
  echo "<pre>";
  print_r($age);
  echo "<pre>";
  echo "<pre>";
  var_dump($age);
  echo "<pre>";

?>