<?php
  // 2 つの倍数判定
  // 整数Nが与えられます。Nが 3 の倍数かつ 5 の倍数の場合はYESを、そうではない場合はNOを出力してください。
  $n = trim(fgets(STDIN));
  if($n % 3 == 0 && $n % 5 == 0){
      echo "YES";
  }else{
      echo "NO";
  }