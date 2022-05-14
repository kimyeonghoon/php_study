<?php

/**
 * break - for, foreach, while, do-while, switch 구조 실행 종료
 * https://www.php.net/manual/en/control-structures.break.php
 */

// 1. 기본값 - 바로 둘러싸는 구조만 해제되는 형태(break)
$array_01 = array(1, 2, 3, 4, 5, 6);
foreach($array_01 as $value) {
    if($value == 3) {
        break;
    }
    echo $value;
}

// 2. 2단계 빠져나오기(break 2)
echo "내부에서 구구단 6단을 만나면 종료!".PHP_EOL;
for($i = 2; $i <= 9; $i++) {
    echo "[${i}단 시작]" .PHP_EOL;
    for($j = 1; $j <= 9; $j++) {
        if($i > 5) {
            break 2;
        }
        $gugu = $i*$j;
        echo "$i * $j = $gugu" . PHP_EOL;
    }
}