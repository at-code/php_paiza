<?php
  // 大文字判定
  // 大文字または小文字のアルファベットCが与えられます。Cが大文字の場合はYESを、そうではない場合はNOを出力してください。
  $c = trim(fgets(STDIN));
  if(ctype_upper($c)){
      echo "YES";
  }else{
      echo "NO";
  }