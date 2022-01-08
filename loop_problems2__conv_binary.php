<?php
  // 10 進数から 2 進数に変換
  // 10 進数で表された整数 N が与えられます。
  // N を 2 進数に変換して出力してください。
  $n = trim(fgets(STDIN));
  // echo decbin($n). "\n";
  
  while($n > 0){
      $mod[] = $n % 2;
      $n = floor($n / 2);
  }
  $count = count($mod);
  for($i = $count-1; $i >= 0; $i--){
      echo $mod[$i];
  }
