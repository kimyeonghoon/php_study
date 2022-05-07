<?php

/**
 * Increamenting/Decreamenting Operation - 증감연산자
 * https://www.php.net/manual/en/language.operators.increment.php
 */

// 1. 전위 증가 연산자(++$i)
$i = 5;
echo ++$i.PHP_EOL; // 먼저 값을 증가시킨 후 표시하므로 6

// 2. 후위 증가 연산자($i++)
$i = 5;
echo $i++.PHP_EOL; // 값을 먼저 보여준 후 증가시키므로 5
echo $i.PHP_EOL; // 6

// 3. 전위 감소 연산자(--$i)
$i = 5;
echo --$i.PHP_EOL; // 먼저 값을 감소시킨 후 표시하므로 4

// 4. 후위 감소 연산자($i--)
$i = 5;
echo $i--.PHP_EOL; // 값을 먼저 보여준 후 감소시키므로 5
echo $i.PHP_EOL; // 4