<?php
  echo"<table align='center'><tr><td align='center'>";
    for($i=0;$i<=3;$i++){
       for($a=$i;$a>=0;$a--){
         print('*');
       }
    echo"<br/>";
   }
  for($i=0;$i<=2;$i++){
    for($a=$i;$a<=2;$a++){
      print('*');
    }
  echo"<br/>";
  }
 echo"</td></tr></table>";
?>