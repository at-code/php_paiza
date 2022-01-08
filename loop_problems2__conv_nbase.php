<?php
  // 10 進数から M 進数に変換
  // 10 進数で表された整数 N, M が与えられます。
  // N を M 進数に変換して出力してください。
  $input = explode(" ",trim(fgets(STDIN)));
  $n = $input[0];
  $m = $input[1];
  
  while($n > 0){
  $mod[] = $n % $m;
  $n = floor($n / $m);
  }
  $count = count($mod);
  for($i = $count-1; $i >= 0; $i--){
      echo $mod[$i];
  }