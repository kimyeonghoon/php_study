<?php

/**
 * while - 표현식이 true이면 계속 실행.
 * https://www.php.net/manual/en/control-structures.while.php
 * https://www.php.net/manual/en/control-structures.do.while.php
 */

// 1. 기본 형태 : while(표현식)
$i = 0;
while($i <10) {
    echo "$i";
    $i++;
}
echo "" . PHP_EOL;

// 2. 먼저 실행 후, 조건 확인 : do ~ while(표현식) 
$i = 0;
do {
    echo "$i";
    $i++;
} while($i <10);
