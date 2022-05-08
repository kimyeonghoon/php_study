<?php

/**
 * switch - if와 유사하지만 else if 구문을 많이 써야하는 경우에 써봄직함.
 * https://www.php.net/manual/en/control-structures.switch.php
 */

$i = 0;

// 1. 기본형 - 줄 단위로 실행하며 표현식이 switch 표현식과 일치하는 경우에만 실제로 명령문을 실행함. switch문이 끝나거나 break문을 만날 때까지 계속 실행함
switch($i){
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default: 
        echo "i는 0도, 1도, 2도 아니다.";
}