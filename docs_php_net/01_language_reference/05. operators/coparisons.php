<?php

/**
 * Comparison Operation - 비교 연산자
 * https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce
 */

// 1. 기본 비교 연산자 - 같다(값이 같음 : ==, 값과 타입이 같음 : ===)
var_dump("1" == 1); // true
var_dump("1" === 1); // false

// 2. 기본 비교 연산자 - 같지 않다
// 값이 같지 않음 : !=, <>
// 값과 타입이 같지 않음 : !==
var_dump("1" != 1); // false
var_dump("1" <> 1); //false
var_dump("1" !== 1); // true

// 3. 기본 비교 연산자 - 작다(<), 크다(>), 작거나 같다(>=), 크거나 같다(<=)
var_dump(1 < 2); // true
var_dump(1 > 2); // false
var_dump(2 >= 2); //true
var_dump(3 <= 3); // true

// 4. 기본 비교 연산자 - Spaceship(<=>)
// 앞의 값이 작으면 -1
// 앞의 값과 뒤의 값이 같으면 0
// 뒤의 값이 작으면 1
var_dump(1 <=> 2); // -1
var_dump(1 <=> 1); // 0
var_dump(1 <=> 0); // 1
var_dump(1.5 <=> 2.5); // -1
var_dump(1.5 <=> 1.5); // 0
var_dump(1.5 <=> 0.5); // 1
var_dump("a" <=> "b"); // -1
var_dump("a" <=> "a"); // 0
var_dump("b" <=> "a"); // 1
var_dump([1, 2, 3] <=> [1, 2, 4]); // -1
var_dump([] <=> []); // 0
var_dump([1, 2, 3] <=> [1, 2, 3]); // 0
var_dump([1, 2, 3] <=> []); // 1 
var_dump([1, 2, 3] <=> [1, 2, 1]); // 1

// 5. 변수 타입 비교 - null vs ???
// 기본적으로 NULL 은 String일 경우 "" int/float일 경우 0, 그 외에는 false로 변환됨
var_dump(NULL < -1); // true(0 < -1)
var_dump(NULL == 0); // true(0 == 0)
var_dump(NULL > 1); // false(0 > 1)
var_dump(NULL == ""); // true("" == "")
var_dump(NULL == "A"); // false("" == "A")

// 6. 변수 타입 비교 - bool vs ???(false < true)
var_dump(TRUE == NULL); // false(1 == 0)
var_dump(FALSE == NULL); // true(0 == 0)
var_dump(1 == TRUE); // true((bool)1 == TRUE)
var_dump(0 == FALSE); // false((bool)0 == FALSE)
var_dump(100 < TRUE); // false((Bool)100 < TRUE)
var_dump(-10 > FALSE); // false((bool)-10 < false)