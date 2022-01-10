<?php
  // 任意の数で何回割れる? 
  // 整数 N, M が与えられます。
  // N が何回 M で割れるかを求め、出力してください。
  $input = explode(" ",trim(fgets(STDIN)));
  $n = $input[0];
  $m = $input[1];
  
  $r = $n;
  $c = 0;
  
  while($r > 1){
      $r = $r / $m;
      $c++;
      if($r % $m != 0){
          break;
      }
  }
  echo $c;