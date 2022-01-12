<?php
  // 曜日の判定
  // ある月の 1 日は日曜日、 2 日は月曜日...です。X日は何曜日でしょう。
  $x = trim(fgets(STDIN));
  $week = ['Sat','Sun','Mon','Tue','Wed','Thu','Fri'];
  $check = $x % 7;
  echo $week[$check];