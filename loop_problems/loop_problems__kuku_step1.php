<?php
    // 九九の 8 の段を半角スペース区切りで出力してください。
    for($i = 1; $i <= 9; $i++){
        echo $i * 8;
        if($i != 9){
            echo " ";
        }else{
            echo "\n";
        }
    }