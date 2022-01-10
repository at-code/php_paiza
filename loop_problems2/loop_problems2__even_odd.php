<?php
    // 偶奇の判定
    // N 個の整数 a_1, a_2, ..., a_N が与えられます。
    // この N 個の整数について、a_1 から順に 奇数か偶数か判定し、奇数なら odd 、偶数なら even を改行区切りで出力してください。
    $n = trim(fgets(STDIN));
    $a = explode(" ",trim(fgets(STDIN)));
    for($i = 0; $i < $n; $i++){
        if($a[$i] % 2 == 0){
            echo "even"."\n";
        }else{
            echo "odd"."\n";
        }
    }