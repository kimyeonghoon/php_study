<?php

/**
 * if - 조건문 
 * https://www.php.net/manual/en/control-structures.if.php
 * https://www.php.net/manual/en/control-structures.else.php
 * https://www.php.net/manual/en/control-structures.elseif.php
 */

$if_int_01 = 1;
$if_int_02 = 2;

// 1. 기본 if 문 - 조건이 참일 때 동작
if($if_int_01 < $if_int_02) {
    echo "$if_int_01 is smaller than $if_int_02" . PHP_EOL;
}

// 2. if ~ else 문 - 첫 번째 조건이 참이면 첫번째 명령문을 실행하고. 거짓일 경우 다른 명령문을 실행
if($if_int_01 > $if_int_02) {
    echo "$if_int_01 is greater than $if_int_02" . PHP_EOL;
} else {
    echo "$if_int_01 is not greater than $if_int_02" . PHP_EOL;
}

// 3. if ~ elseif/else if ~ else
if($if_int_01 > $if_int_02) {
    echo "${if_int_01}은 ${if_int_02}보다 크다";
} else if($if_int_01 == $if_int_02) {
    echo "${if_int_01}은 ${if_int_02}과 같다";
} else {
    echo "${if_int_01}은 ${if_int_02}보다 작다";
}