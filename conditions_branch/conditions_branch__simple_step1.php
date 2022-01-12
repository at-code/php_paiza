<?php
  // 単純な条件分岐
  // 文字列Sが与えられます。Sがpaizaと一致する場合はYESを、一致しない場合はNOを出力してください。
  $s = trim(fgets(STDIN));
  if($s == "paiza"){
      echo "YES";
  }else{
      echo "NO";
  }