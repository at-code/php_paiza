<?php
  // 加算された数列の最小値
  // N 個の整数 a_1, a_2, ..., a_N が与えられます。
  // a_i に i を足したとき、N 個の整数の最小値を出力してください。
  $n = trim(fgets(STDIN));
  $an = explode(" ",trim(fgets(STDIN)));
  $ani = [];
  for($i = 0; $i < $n; $i++){
      $ani[] = $i+1 + $an[$i];
  }
  // echo min($ani);
  $min = 1000;
  for($i = 0; $i < $n; $i++){
      if($min > $ani[$i]){
          $min = $ani[$i];
      }
  }
  echo $min;