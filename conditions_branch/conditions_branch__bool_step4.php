<?php
  // NOT
  // 整数Xが与えられます。Xが 10 以上ではない場合はYESを、Xが 10 以上である場合はNOを出力してください。
  $x = trim(fgets(STDIN));
  if(!($x >= 10)){
      echo "YES";
  }else{
      echo "NO";
  }