<?php
  include 'AntiXSS.php';
  $anti = new AntiXSS();

  $str = "aaaa";
  $num = "123";
  $a = $anti->setFilter($str, "white", "everything");
  echo $a;
  $b = $anti->setFilter($num, "white", "everything");
  echo $b;
  $c = preg_match("([0-9]+)", $num);
  echo $c;
?>
