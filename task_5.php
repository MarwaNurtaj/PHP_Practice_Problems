<?php

$cnt = 1;

for ($x = 1; $x <= 10; $x++) {
  if ($x < 10) {
    if($cnt==2){
      echo $x."_";
      $cnt=1;
    }
    
    else{
      echo "$x-";
      $cnt++;
    }
    
  } else {
    echo "$x" . "\n";
  }
}
?>
