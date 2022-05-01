<?php

/**
 * boolean - true, false
 * http://docs.php.net/manual/en/language.types.boolean.php
 */

// 1. boolean - true, false 확인
$a_boolean = TRUE;
echo "체크 1회 - ";
if ($a_boolean == TRUE) {
    echo "TRUE";
    $a_boolean = FALSE;
} else {
    echo "FALSE";
    $a_boolean = TRUE;
}
echo "\n체크 2회 - ";
if ($a_boolean == TRUE) {
    echo "TRUE";
    $a_boolean = FALSE;
} else {
    echo "FALSE";
    $a_boolean = TRUE;
}

// 2. (casting) string(true - 공백이나 0이 아닐 경우 / false - 공백이나 0일 경우)
$a_string1 = "";
$a_string2 = "0";
$a_string3 = "abcd";
var_dump((bool)$a_string1);
var_dump((bool)$a_string2);
var_dump((bool)$a_string3);

// 3. (casting) integer(true - 0이 아닌 경우 / false - 0인 경우)
$a_integer1 = 1;
$a_integer2 = 0;
$a_integer3 = -1;
var_dump((bool)$a_integer1);
var_dump((bool)$a_integer2);
var_dump((bool)$a_integer3);

// 4. (casting) float(true - 0이 아닌 경우 / false - 0인 경우)
$a_float1 = 3.24;
$a_float2 = -3.24;
$a_float3 = 0.000;
var_dump((bool)$a_float1);
var_dump((bool)$a_float2);
var_dump((bool)$a_float3);