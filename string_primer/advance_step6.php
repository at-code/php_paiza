<?php
  // パスワード作成 
  // K さんは paiza のアカウントを作成することにしました。そのためには、パスワードの設定が必要なことがわかりました。
  // そこで K さんは忘れないように、次のようなルールにのっとって N 文字のパスワードを設定することにしました。
  
  // ・ ルール
  // K さんは N 文字のうち、 Q 文字だけ覚えておく文字を決めておく。
  // 具体的には n_i 文字目を c_i とだけ決めて、残りの全ての文字を C にする。
  
  // K さんの設定したパスワードを当ててください。
  
  // 例
  // ・ N = 5 , Q = 1 , n_1 = 2 , c_1 = 'T' , C = 'K' のとき
  // パスワードは 5 文字であり、 2 文字目が 'T' , それ以外の文字を 'K' としたものである "KTKKK" が K さんのパスワードとなる。
  $n = trim(fgets(STDIN));
  $q = trim(fgets(STDIN));
  $arr = [];
  for($i = 0; $i < $q; $i++){
      $arr[] = explode(" ",trim(fgets(STDIN)));
  }
  $c = trim(fgets(STDIN));
  
  $pass = "";
  //パスワードの全文字を$cにする
  for($i = 0; $i < $n; $i++){
      $pass = $pass.$c;
  }
  
  //指定の文字を変換
  $count = count($arr);
  for($j = 0; $j < $count; $j++){
      $n1 = $arr[$j][0]-1;
      $c1 = $arr[$j][1];
      $pass[$n1] = $c1;
  }
  echo $pass;