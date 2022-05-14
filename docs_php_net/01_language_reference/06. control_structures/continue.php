<?php

/**
 * continue - 건너뛰기
 * https://www.php.net/manual/en/control-structures.continue.php
 */

// 1. 짝수 건너뛰기(1~10까지)
for($i = 0; $i <= 10; $i++) {
    if(($i %2) == 0) {
        continue;
    }
    echo $i.PHP_EOL;
}