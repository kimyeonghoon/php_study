<?php

/**
 * 변수 기본 - 변수는 $ 기호 다음에 변수 이름으로 표시하며, 대소문자 구분함. 
 * https://www.php.net/manual/en/language.variables.basics.php
 */


// 1. 변수명으로 사용할 수 있는 이름은 숫자로 시작하지 않는 한 자유롭게 쓸 수 있음(영문, _로 시작)
$var_01 = 'Bob';
$Var_01 = 'Joe';
echo "$var_01, $Var_01\n"; // "Bob, Joe"
// $4site_01 = 'not yet' <- 이런 형태로는 사용 불가
$_4site_01 = 'not yet'; // _와 함께 쓸 때는 가능
$täyte_01 = 'mansikka'; // ä ascii 코드에 존재하는 건 가능
$가나다_01 = 'abc'; // 물론 한글도 가능하지만, 일반적으로 이렇게 쓰지는 않음
echo "$_4site_01, $täyte_01, $가나다_01\n";

// 2. 참조로 할당할 경우 소스 변수의 시작부분에 (&) 추가
$foo_02 = 'Bob';
$bar_02 = &$foo_02;
$bar_02 = "My name is $bar_02";
echo $bar_02; // My name is Bob
echo $foo_02; // My name is Bob

// 3. 초기화되지 않은 변수의 기본값
var_dump($unset_var);        // 변수의 기본값은 NULL
echo($unset_bool ? "true\n" : "false\n"); // boolean의 기본값은 false

$unset_str .= 'abc';
var_dump($unset_str); // 문자열 사용 - "abc"

$unset_int += 25;
var_dump($unset_int); // 숫자 사용 - 0 + 25 = 25

$unset_float += 3.14;
var_dump($unset_float); // 소수 사용 - 0 + 3.14 = 3.14

$unset_array[3] = "def";
var_dump($unset_array); // 배열 사용 - array() + array(3 => "def") = array(3 => "def")
