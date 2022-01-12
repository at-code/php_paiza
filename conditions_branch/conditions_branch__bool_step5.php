<?php
  // AND+NOT
  // 2 つの整数A、Bが与えられます。以下の条件を満たす場合はYESを、そうではない場合はNOを出力してください。
  // ・「Aが 10 以上」 かつ 「Bが 10 以上ではない」
  $input = explode(" ",trim(fgets(STDIN)));
  $a = $input[0];
  $b = $input[1];
  if($a >= 10 && !($b >= 10) ){
      echo "YES";
  }else{
      echo "NO";
  }