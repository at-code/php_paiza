<?php
  // 2 で何回割れる？
  // 整数 N が与えられます。
  // N が何回 2 で割れるかを求め、出力してください。
  $n = trim(fgets(STDIN));
  $r = $n;
  $c = 0;
  while($r > 1){
      $r = $r / 2;
      $c++;
      if($r % 2 != 0){
          break;
      }
  }
  echo $c;