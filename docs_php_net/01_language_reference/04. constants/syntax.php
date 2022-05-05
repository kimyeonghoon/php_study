<?php

/**
 * Syntax - define 또는 const로 정의. 상수는 일반적으로 대문자로 지정
 * https://www.php.net/manual/en/language.constants.syntax.php
 */

// 1. define을 이용하여 상수 선언
define("CONSTANT_01", "Hello World.\n");
echo CONSTANT_01;

// 2. const 키워드를 이용하여 선언
const CONSTANT_02 = "Hello World.\n";
echo CONSTANT_02;

const CONSTANT_03 = array('dog', 'cat', 'bird');
echo CONSTANT_03[1];