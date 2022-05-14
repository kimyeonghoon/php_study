<?php

/**
 * return - 함수 내에서 호출되면 return문은 현재 함수의 실행을 즉시 종료하고 해당 인수를 값으로 반환
 * https://www.php.net/manual/en/function.return.php
 */

// 1. return 예시

function multiple($args1, $args2) {
    $value = $args1 * $args2;
    return "${args1} * ${args2}의 결과는 ${value} 입니다.";
    echo "return 다음에 값이 있지만, 무시됨";
}

echo multiple(2, 4);