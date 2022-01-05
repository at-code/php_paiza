<?php
    // 数列の何番目にある?
    // 長さ N の数列 a (a_1, a_2, ..., a_N) が与えられます。
    // この数列の何番目に 1 があるか出力してください。
    // 数列の 1 つ目の要素を 1 番目とし、数列には必ず 1 がひとつだけ含まれることとします。
    $n = trim(fgets(STDIN));
    $a = explode(" ",trim(fgets(STDIN)));
    $count = 0;
    for($i = 0; $i < $n; $i++){
        $count++;
        if($a[$i] == 1){
            break;
        }
    }
    echo $count."\n";
    