<?php
  // 約数の列挙
  // 整数 N が与えられます。
  // N の約数を小さい方から順に改行区切りで出力してください。
  $n = trim(fgets(STDIN));
  $i = 1;
  while($i <= $n){
    if($n % $i == 0){
        echo $i."\n";
    }
    $i++;
  }
