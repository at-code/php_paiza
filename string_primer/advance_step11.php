<?php
  // 巨大な数の足し算
  // 数値を表す文字列 S , T が与えられるので、S + T の結果を表す文字列を出力してください。
  // 繰り上がりが発生する可能性があるので注意してください。
  $s =trim(fgets(STDIN));
  $t =trim(fgets(STDIN));
  
  $r = "";
  $len = strlen($s);
  $moveUp = "0";
  for($i = $len-1; $i >= 0; $i--){
      $n = $s[$i] + $t[$i] + $moveUp;
      $moveUp = 0;
      $check = strlen($n);
      if($check == 1){
          $r = $r.$n;
      }else{
          $str = (string)$n;
          $moveUp = $str[0];
          $r = $r.$str[1];
      }
  }
  if($moveUp != 0){
      $r = $r.$moveUp;
  }
  
  //文字反転
  $len = strlen($r);
  $res = "";
  for($i = $len-1; $i >= 0; $i--){
      $res = $res.$r[$i]; 
  }
  echo $res;
  