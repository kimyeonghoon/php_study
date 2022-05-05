<?php

/**
 * arrays - 정렬된 맵. Array, list, hash table, dictionary, collection, stack, queue 등등등..
 * https://www.php.net/manual/en/language.types.array.php
 */

// 1. Simple Array - 기본형 array()
$array_01 = array(
    "foo" => "bar",
    "bar" => "foo"
);

var_dump($array_01);


// 2. Simple Array - 기본형에서 더 짧게 쓰기 []
$array_02 = [
    "foo" => "bar",
    "bar" => "foo"
];

var_dump($array_02);


// 3. Type Casting and Overwrite - 모든 키가 1로 캐스팅 되기 때문에 최종적으로 "d"만 남음
$array_03 = array(
    1 => "a",        // [1] => string(1) "a"
    "1" => "b",      // [1] => string(1) "b"
    1.5 => "c",      // [1] => string(1) "c"
    true => "d"      // [1] => string(1) "d"
);

var_dump($array_03);


// 4. 숫자와 문자가 혼합된 키 배열
$array_04 = array(
    "foo" => "bar",    // ["foo"] => string(3) "bar"
    "bar" => "foo",    // ["bar"] => string(3) "foo"
    100 => -100,       // [100] => int(-100)
    -100 => 100        // [-100] => int(100)
);

var_dump($array_04);


// 5. 키가 없는 인덱스 배열 - 0부터 시작
$array_05 = array(
    "foo",        // [0] => string(3) "foo"
    "bar",        // [1] => string(3) "bar"
    "hello",      // [2] => string(5) "hello"
    "world"       // [3] => string(5) "world"
);

var_dump($array_05);


// 6. 모든 요소에 키가 존재하지 않는 경우(일부만 존재)
$array_06 = array(
    "a",        // [0] => string(1) "a"
    "b",        // [1] => string(1) "b"
    6 => "c",   // [6] => string(1) "c"
    "d"         // [7] => string(1) "d"
);

var_dump($array_06);


// 7. 배열 요소 접근 방법
$array_07 = array(
    "foo" => "bar",
    42 => 24,
    "multi" => array(
        "dimensional" => array(
            "internal_array" => "foo"
        )
    )
);

var_dump($array_07["foo"]); // "foo" 키 접근
var_dump($array_07[42]);    // 42 키 접근
var_dump($array_07["multi"]["dimensional"]["internal_array"]); // internal_array 접근


// 8. Collection
$array_08 = array('red', 'blue', 'green', 'yello');

foreach ($array_08 as $color) {
    echo "Do you like $color?\n";
}