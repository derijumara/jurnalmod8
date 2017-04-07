<?php

$before  = 0;
$current  = 1;

$result = "&nbsp;$before&nbsp;$current";
 
 for($i = 0;$i<8;$i++){

  $output = $current + $before;

  $result .= "&nbsp".$output;

  $before = $current;
  $current = $output;
 }
 echo $result;
?>