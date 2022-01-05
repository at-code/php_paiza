<?php
    // 各桁の和
    // 10 進数で表された整数 N が与えられます。
    // 整数 N の各桁の和を計算し、出力してください。
    $n = trim(fgets(STDIN));
    $m = strlen($n);
    $sum = 0;
    for($i = 0; $i < $m; $i++){
        $sum = $sum + $n[$i];
    }
    echo $sum."\n";