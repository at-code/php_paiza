<?php
    // 長さ N の数列 a (a_1, a_2, ..., a_N) が与えられます。
    // この数列の要素を逆順に、改行区切りで出力してください。
    $n = trim(fgets(STDIN));
    $a = explode(" ",trim(fgets(STDIN)));
    for($i = $n-1; $i >= 0; $i--){
        echo $a[$i]."\n";
    }
    
?>