<?php

/**
 * String
 * 문자열은 4가지 방법으로 지정할 수 있음(', ", heredoc, nowdoc)
 * http://docs.php.net/manual/en/language.types.string.php
 */

$message='변수 테스트 입니다';
// 1. Single quoted(') - 있는 그대로 출력
echo 'this is a simple string\n';
echo '작은 따옴표는 [\\\'] 이용 - I\'ll be back!';
echo '${message}';

// 2. Double quoted(") - 큰따옴표로 묶인 경우 이스케이프 구문 해석, 변수 사용 가능
echo "$message";
echo "동해물과 백두산이
마르고 닳도록";
echo "동해물과 백두산이\n마르고 닳도록\t하느님이 보우하사\n";

// 3. heredoc 구문(<<<) 닫는 식별자 필수. 영숫자 문자와 밑줄만 포함되며, 숫자로 시작할 수 없음
echo <<<END
A
 B
  C
   D
  C
 B
A 
$message  
END;

// 4. nowdoc 구분(<<<) 식별자가 작은 따옴표(')로 묶이는 형태. 변수도 문자열 취급
echo <<<'EOT'
A
 B
  "$message"
 B
A
EOT;