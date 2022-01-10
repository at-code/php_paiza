<?php
    // 整数 N が与えられます。
    // 2 の 1 乗から 2 の N 乗までを改行区切りで出力してください。
    $n = trim(fgets(STDIN));
    for($i = 1; $i <= $n; $i++){
        echo pow(2 , $i)."\n";
    }