<?php

/** 
 * String Operator - 연결 연산자(.), 연결 할당 연산자(.=)
 * https://www.php.net/manual/en/language.operators.string.php
 */

// 1. 연결 연산자 - 문자열과 문자열을 연결
$string_01_a = "Hello ";
$string_01_b = "World!";
echo $string_01_a . $string_01_b. PHP_EOL;

// 2. 연결 할당 연산자 - 오른쪽 인수를 왼쪽 인수에 추가
$string_02 = "Hello ";
echo $string_02 .= "World!";