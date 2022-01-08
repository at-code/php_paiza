<?php
  // 階乗の計算
  // 整数 N が与えられます。
  // N の階乗 N! を計算して出力してください。
  $n = trim(fgets(STDIN));
  $r = 1;
  while($n > 0){
      $r = $r * $n;
      $n--;
  }
  
  echo $r;