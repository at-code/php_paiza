<?php
  // 0 が含まれていないか判定
  // 長さ N の数列Aが与えられます。Aの中に 0 が含まれていない場合はYESを、 0 が含まれている場合はNOを出力してください。
  $n = trim(fgets(STDIN));
  $c = 0;
  for($i = 0; $i < $n; $i++){
      $a = trim(fgets(STDIN));
      if($a == 0){
          echo "NO";
          break;
      }else{
          $c++;
      }
  }
  if($c == $n){
      echo "YES";
  }