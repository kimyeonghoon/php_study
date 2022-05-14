<?php

/**
 * foreach - 배열 반복
 * https://www.php.net/manual/en/control-structures.foreach.php
 */

// 1. 기본형태 - 값만
$arr_01 = array(1, 2, 3, 4);
foreach($arr_01 as $value) {
    echo $value . PHP_EOL;
}

// 2. 기본형태 - 키와 값 같이
$arr_02 = array(
    "one" => 1,
    "two" => 2,
    "three" => 3
);

foreach($arr_02 as $key => $value) {
    echo "\$arr_02[$key] => $value" . PHP_EOL;
}

// 3. list()를 이용하여 중첩 배열 풀기
$array_03 = array(
    array(1, 2),
    array(3, 4),
    array(5, 6)
);

foreach($array_03 as list($a, $b)) {
    echo "A: $a, B: $b" . PHP_EOL;
}