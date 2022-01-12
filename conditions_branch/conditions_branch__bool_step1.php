<?php
  // AND
  // 2 つの整数A、Bが与えられます。AとBが両方とも 10 以上の場合はYESを、そうではない場合はNOを出力してください。
  $input = explode(" ",trim(fgets(STDIN)));
  $a = $input[0];
  $b = $input[1];
  
  
  if($a >= 10 & $b >= 10){
  echo "YES";
  }else{
  echo "NO";
  }