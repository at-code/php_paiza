<?php
  // 重複の削除
  // 数字を表す文字列 S が与えられるので、 S の先頭（左側）から S を見て行ったときにその数字が現れたのが 2 回目以降の場合、
  // その数字を削除した文字列（重複した数字を削除した文字列）を求めてください。
  $s = trim(fgets(STDIN));
  $len = strlen($s);
  $check = "";
  for($i = 0; $i < $len; $i++){
      if($i == 0){
          $check = $check.strval($s[$i]);
      }else{
          if(strpos(strval($check),strval($s[$i])) !== false){
              continue;
          }
          $check = strval($check).strval($s[$i]);
      }
  }
  echo $check;
    
    