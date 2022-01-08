<?php
  // 階乗の末尾に 0 はいくつ付く？
  // 整数 N が与えられます。
  // N の階乗 N! の末尾に 0 がいくつ付くか求め、出力してください。
  $n = trim(fgets(STDIN));
  
  $c = 0;
  while($n > 0){
      $c = $c + floor($n / 5);
      $n /= 5;
  }
  echo $c;
  