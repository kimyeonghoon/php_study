<?php

/**
 * Assignment Operators - 할당 연산자(=). 대입
 * https://www.php.net/manual/en/language.operators.assignment.php
 */

// 1. 산술 할당 연산자(+=, -=, *=, /=, %=, **=)
$i = 10;
var_dump($i += 3); // 10 + 3 = 13
$i = 10;
var_dump($i -= 3); // 10 - 3 = 7
$i = 10;
var_dump($i *= 3); // 10 * 3 = 30
$i = 10;
var_dump($i /= 3); // 3.33333
$i = 10;
var_dump($i %= 3); // 1
$i = 10;
var_dump($i **= 3); // 10 * 10 * 10 = 1000

// 2. 문자열 연결 할당 연산자(.=)
$message = 'Hello, ';
echo $message .= 'World'; // Hello, World