<?php
  // 数値の分岐
  // 整数Nが与えられます。Nが 100 以下の場合はYESを、そうではない場合はNOを出力してください。
  $n = trim(fgets(STDIN));
  if($n <= 100){
    echo "YES";
  }else{
    echo "NO";
  }