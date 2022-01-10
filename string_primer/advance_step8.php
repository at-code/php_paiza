<?php
  // 数式の計算（ 1 桁）
  // 正しい数式を表す文字列 S が与えられるので、その数式を計算した結果を出力してください。
  // ただし、出てくる計算は足し算・引き算のみとし、数式に出てくる数字は全て 1 桁であるものとします。

  $s = trim(fgets(STDIN));
  $len = strlen($s);
  $sum = 0;
  $n = 0;
  for($i = 0; $i < $len; $i++){
      if($i == 0){
          $sum = $s[$i];
      }elseif ($i % 2 != 0) {
          $n = $s[$i];
      }else{
          if($n == "+"){
              $sum = $sum + $s[$i];
          }else{
              $sum = $sum - $s[$i];
          }
      }
  }
  echo $sum."\n";
