<?php
  // FizzBuzz
  // 整数Nが与えられます。 
  // Nが 3 で割り切れる場合はFizz、Nが 5 で割り切れる場合はBuzz、 Nが 3 と 5 の両方で割り切れる場合はFizzやBuzzの代わりにFizzBuzzを出力してください。
  // ただし、Nが 3 の倍数でも 5 の倍数でもないときはNをそのまま出力してください。
  $n = trim(fgets(STDIN));
  if($n % 3 == 0 && $n % 5 == 0){
      echo "FizzBuzz\n";
  }elseif ($n % 5 == 0) {
      echo "Buzz\n";
  }elseif ($n % 3 == 0){
      echo "Fizz\n";
  }else{
      echo $n."\n";
  }