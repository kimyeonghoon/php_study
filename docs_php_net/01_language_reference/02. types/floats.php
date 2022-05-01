<?php

/**
 * float(double) - 소수
 * http://docs.php.net/manual/en/language.types.float.php
 */

// 1. float
$a_float = 3.14;
echo $a_float;

// 2. (casting) boolean(true - 1, false - 0)
$a_boolean_true = true;
$a_boolean_false = false;
var_dump((float)$a_boolean_true);
var_dump((float)$a_boolean_false);

// 3. (casting) float
$a_integer = 3;
var_dump((float)$a_integer);

// 4. (casting) strings - 문자열이 숫자로 시작하거나 숫자인 경우 해당 소수값 반환, 그 외에는 0 반환
$a_string1 = 'hello';
$a_string2 = '5.3ho';
var_dump((float)$a_string1);
var_dump((float)$a_string2);

// 5. (casting) null - 항상 0을 반환
$a_null = null;
var_dump((float)$a_null);