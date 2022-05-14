<?php

/**
 * for문 - for(표현식1; 표현식2; 표현식3)
 * https://www.php.net/manual/en/control-structures.for.php
 */

// 1. 기본형태
for($i = 1; $i <= 10; $i++) {
   echo $i;
}

// 2. 배열 반복
$student = array(
    array('name' => 'Kalle', 'age' => 10),
    array('name' => 'Pierre', 'age' => 12),
    array('name' => 'Bob', 'age' => 14)
);

$age_sum = 0;
for($i = 0; $i < count($student); $i++) {
    $age_sum = $age_sum + $student[$i]['age'];
}
$age_avg = $age_sum/3;
echo "학생의 평균 나이는 ${age_avg}세 입니다.";