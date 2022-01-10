<?php
    // 巨大な数の足し算(繰り上がりなし)
    // 数値を表す文字列 S , T が与えられるので、S + T の結果を表す文字列を出力してください。
    // なお、 S + T では、 足し算をしたときに全ての桁において繰り上がりが発生しないことが保証されているものとします。
    $s =trim(fgets(STDIN));
    $t =trim(fgets(STDIN));

    $r = "";
    $len = strlen($s);
    for($i = 0; $i < $len; $i++){
        $sum = $s[$i] + $t[$i];
        $r = $r.$sum;
    }
    echo $r;