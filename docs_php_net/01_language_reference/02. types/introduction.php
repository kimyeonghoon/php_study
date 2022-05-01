<?php

/**
 * types - PHP에서는 10가지 자료형 제공
 * 1) Scalar types(bool, int, float, string)
 * 2) Compound types(array, object, callable, iterable)
 * 3) Special types(resource, null) 
 * http://docs.php.net/manual/en/language.types.intro.php
 */

// 1. bool
$a_bool = TRUE;
echo gettype($a_bool);

// 2. string
$a_str = "foo";
$a_str2 = 'foo';
echo gettype($a_str);
echo gettype($a_str2);

// 3. int
$a_int = 12;
echo gettype($a_int);

// 4. float
$a_float = 3.14;
echo gettype($a_float);