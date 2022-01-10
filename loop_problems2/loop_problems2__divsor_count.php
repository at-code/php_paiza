<?php
  // 約数の個数
  // 整数 N が与えられます。
  // N の約数の個数を出力してください。
  // 約数とは、N を割り切る整数のことを指します。
  $n = trim(fgets(STDIN));
  $c = 0;
  $i = 1;
  while($i <= $n){
      $r = $n / $i;
      if(is_int($r)){
          $c++;
      }
      $i++;
  }
  echo $c;