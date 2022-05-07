<?php

/**
 * Logical Operators - 논리 연산자(And, Or, Xor, Not)
 */

// 1. And 연산자 - 둘다  TRUE여야  같아야 TRUE, 하나라도 FALSE면 FALSE
var_dump(TRUE && TRUE); // true
var_dump(TRUE && FALSE); // false
var_dump(TRUE and TRUE); // true
var_dump(TRUE and FALSE); // false

// 2. Or 연산자 - 하나라도 TRUE면 TRUE
var_dump(TRUE || TRUE); // true
var_dump(TRUE || FALSE); // true
var_dump(TRUE or TRUE); // true
var_dump(TRUE or FALSE); // true

// 3. Xor 연산자 - 둘 중 하나만 TRUE라면 TRUE. 둘 다 TRUE라면 FALSE.
var_dump(TRUE xor FALSE); // TRUE
var_dump(TRUE xor TRUE); // FALSE

// 4. Not 연산자
var_dump(TRUE != TRUE); // FALSE
var_dump(TRUE != FALSE); // TRUE