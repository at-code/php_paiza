<?php
    // 加算された数列の最大値
    // N 個の整数 a_1, a_2, ..., a_N が与えられます。
    // a_i に i を足したとき、a_1 , ... , a_N の最大値を出力してください。
    $n = trim(fgets(STDIN));
    $an = explode(" ",trim(fgets(STDIN)));
    $ani = [];
    for($i = 0; $i < $n; $i++){
        $ani[] = $i+1 + $an[$i];
    }
    echo max($ani);