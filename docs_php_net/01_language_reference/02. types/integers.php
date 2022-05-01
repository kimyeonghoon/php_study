<?php
/**
 * Integers - 정수(..., -2, -1, 0, 1, 2, ...)
 * http://docs.php.net/manual/en/language.types.integer.php
 */

// 1. 10진수
$a_decimal = 255;
echo $a_decimal;
echo "\n";

// 2. 8진수
$a_octal = 0377;
echo $a_octal;
echo "\n";

// 3. 16진수
$a_hexadecimal = 0xFF;
echo $a_hexadecimal;
echo "\n";

// 4. 2진수
$a_binary = 0b11111111;
echo $a_binary;
echo "\n";

// 5. (casting) boolean(true - 1, false - 0)
$a_boolean_true = true;
$a_boolean_false = false;
var_dump((int)$a_boolean_true);
var_dump((int)$a_boolean_false);

// 6. (casting) float
$a_float = 3.23567;
var_dump((int)$a_float);

// 7. (casting) strings - 문자열이 숫자로 시작하거나 숫자인 경우 해당 정수값 반환, 그 외에는 0 반환
$a_string1 = 'hello';
$a_string2 = '5ho';
var_dump((int)$a_string1);
var_dump((int)$a_string2);

// 8. (casting) null - 항상 0을 반환
$a_null = null;
var_dump((int)$a_null);

