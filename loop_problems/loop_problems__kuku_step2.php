<?php
    // 整数 N が与えられます。
    // 九九の N の段を半角スペース区切りで出力してください。
    $n = trim(fgets(STDIN));
    for($i = 1; $i <= 9; $i++){
        echo $i * $n;
        if($i != 9){
            echo " ";
        }else{
            echo "\n";
        }
    }