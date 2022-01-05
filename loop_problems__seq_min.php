<?php
    // 数列の最小値
    // 長さ N の数列 a (a_1, a_2, ..., a_N) が与えられます。
    // この数列の最小値を出力してください。
    $n = trim(fgets(STDIN));
    $a = explode(" ",trim(fgets(STDIN)));
    $min = 1000;
    for($i = 0; $i < $n; $i++){
        if($a[$i] < $min){
            $min = $a[$i];
        }
    }
    echo $min."\n";
    