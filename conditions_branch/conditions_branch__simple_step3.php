<?php
  // 数値演算結果で分岐
  // 整数 A, B, C が与えられます。式 A × B ≦ C が成立している場合はYESを、そうではない場合はNOを出力してください。
  $input = explode(" ",trim(fgets(STDIN)));
  $a = $input[0];
  $b = $input[1];
  $c = $input[2];
  
  
  if($a * $b <= $c){
    echo "YES";
  }else{
    echo "NO";
  }