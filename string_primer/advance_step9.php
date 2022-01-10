<?php
  // 数式の計算
  // 正しい数式を表す文字列 S が与えられるので、
  // その数式を計算した結果を出力してください。ただし、出てくる計算は足し算・引き算のみとします。
  $s =trim(fgets(STDIN));
  $len = strlen($s);
  $arr = [];
  $c = 0;
  $start = 0;
  for($i = 0; $i < $len; $i++){
      if($s[$i] != "+" & $s[$i] != "-"){
          if($start == 0){
              $arr[$c] = "";
              $start++;
          }
          $arr[$c] = $arr[$c].$s[$i];
      }else{
          $c++;
          $arr[$c] = $s[$i];
          $c++;
          $start = 0;
      }
  }
  // print_r($arr);
  
  $count = count($arr);
  $sum = "";
  for($i = 0; $i < $count; $i++){
      if($i == 0){
          $sum = $arr[$i];
      }elseif ($i % 2 != 0) {
          $n = $arr[$i];
      }else{
          if($n == "+"){
            $sum = $sum + $arr[$i];
          }else{
            $sum = $sum - $arr[$i];
          }
      }
  }
  echo $sum;