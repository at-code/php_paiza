<?php
  // AND+OR
  // 3 つの整数X, Y, Zが与えられます。「Xが 10 以上」かつ「Yが 10 以上」の場合はYESを、そうではない場合はNOを出力してください。
  // ただし、「Zが 10 以上の」場合はXとYの値にかかわらず、必ずYESを出力してください。
  $input = explode(" ",trim(fgets(STDIN)));
  $x = $input[0];
  $y = $input[1];
  $z = $input[2];
  if($x >= 10 && $y >= 10 || $z >= 10){
      echo "YES";
  }else{
      echo "NO";
  }