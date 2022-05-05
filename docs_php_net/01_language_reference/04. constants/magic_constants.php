<?php

/**
 * magic constants - 9개의 매직상수 존재
 * https://www.php.net/manual/en/language.constants.magic.php
 */

// 1. LINE - 현재 파일의 라인 번호 리턴
var_dump(__LINE__); // 9

// 2. FILE - 현재 파일의 경로와 파일명 리턴
var_dump(__FILE__); // ~~~~\magic_constants.php

// 3. DIR - 현재 파일의 디렉토리명 리턴
var_dump(__DIR__); // ~~~~\04. constatns

// 나머지 6개는 객체지향과 관련이 있어 추후에 다룸