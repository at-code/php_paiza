<?php
    // 数列の最大値
    // 長さ N の数列 a (a_1, a_2, ..., a_N) が与えられます。
    // この数列の最大値を出力してください。
    $n = trim(fgets(STDIN));
    $a = explode(" ",trim(fgets(STDIN)));
    $max = 0;
    for($i = 0; $i < $n; $i++){
        if($a[$i] > $max){
            $max = $a[$i];
        }
    }
    echo $max."\n";
    