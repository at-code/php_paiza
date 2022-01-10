<?php
  // カウント変数を使った計算
  // N 個の整数 M_1, M_2, ..., M_N があります。
  // i 番目の M を M_i とするとき、M_i * i を改行区切りで出力してください。
  // 例えば、M_5 が 3 の場合、3 * 5 = 15 となります。
  $n = trim(fgets(STDIN));
  $m = explode(" ",trim(fgets(STDIN)));
  for($i = 0; $i < $n; $i++){
      echo $m[$i]* ($i+1)."\n";
  }