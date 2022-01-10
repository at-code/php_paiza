<?php
  // N が M ずつ増えたときにいつ K を越える？
  // 整数 N, M, K が与えられます。
  // N が M ずつ増えるとき、何回目に K を越えるか出力してください。
  $input = explode(" ",trim(fgets(STDIN)));
  $n = $input[0];
  $m = $input[1];
  $k = $input[2];
  $c = 0;
  if($n >= $k){
      echo "0";
  }else{
      while($n <= $k){
          $n = $n + $m;
          $c++;
      }
      echo $c;
  }
  
  