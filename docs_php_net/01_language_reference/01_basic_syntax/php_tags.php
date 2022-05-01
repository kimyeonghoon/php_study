<?php

/**
 * PHP tags - php open/closing tag
 * 3가지 방식이 존재. php 파일 단독으로 사용시 닫기(>) 생략 가능
 * http://docs.php.net/manual/en/language.basic-syntax.phptags.php
 */

?>

<?php
// 1. 일반적인 경우 사용(HTML, XML 문서 등에 삽입할 때 사용)
    echo 'Hello, World';
?>

<?=
// 2. 짧은 에코 태그를 사용할 때 사용(1번과 동일한 구문임)
    'Hello, World';
?>

<?php
// 3. short_open_tag가 활성화되어 있을 때는 아래 주석 내용처럼 줄여서 쓸 수 있음
/**
 * <?
 *     echo 'Hello, World';
 */

 // 4. 파일에 순수 php코드만 포함되어 있을 경우 php 태그 닫는 것을 생략할 수 있음
    echo 'Hello, World';
