<?php
  // 巨大な数のかけ算
  //   数値を表す文字列 S と 1 桁の数値 T が与えられるので、S * T の結果を表す文字列を出力してください。
  $s =trim(fgets(STDIN));
  $t =trim(fgets(STDIN));
  
  $r = "";
  $len = strlen($s);
  $moveUp = "0";
  if($t != 0){
      for($i = $len-1; $i >= 0; $i--){
        $n = $s[$i] * $t + $moveUp;
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
  }else{
      echo 0;
  }
