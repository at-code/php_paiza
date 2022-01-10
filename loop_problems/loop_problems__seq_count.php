<?php
    // 数列の中に何個ある?
    // 長さ N の数列 a (a_1, a_2, ..., a_N) が与えられます。
    // この数列の中に 1 が何個あるか出力してください。
    $n = trim(fgets(STDIN));
    $a = explode(" ",trim(fgets(STDIN)));
    $count = 0;
    for($i = 0; $i < $n; $i++){
        if($a[$i] == 1){
            $count++;
        }
    }
    echo $count."\n";