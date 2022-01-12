<?php
  // 偶奇の判定
  // 長さ N の数列Aが与えられます。この数列に含まれる偶数の要素の個数と、奇数の要素の個数を答えてください。
  $n = trim(fgets(STDIN));
  $a = explode(" ",trim(fgets(STDIN)));
  $e = 0;
  $o = 0;
  for($i = 0; $i < $n; $i++){
      if($a[$i] % 2 == 0){
          $e++;
      }else{
          $o++;
      }
  }
  echo $e." ".$o;