<?php
/*
để khai báo 1 biến ta dùng từ khóa $ và sau đó là tên biến
gán giá trị cho nó bằng dấu =
*/
$variable = 12;

$_variable = 3.14;

$Variable = "Hello";

echo $Variable . "\n";

echo $variable . "\n";

echo $_variable . "\n";

// khai báo hằng

echo "-------------------\n";
define("GREETING", "Hello everybody");

const PI = 3.14;

echo GREETING . "\n";

echo PI . "\n";

// biến toàn cục
$global = 10;

function staticVariable() {
    // biến tĩnhtĩnh
    static $count = 0;
    $count++;
    // biến cục bộ
    $local = 10;
    echo "Local variable count is: $local\n";
    echo "Static variable count is: $count\n";
}
?>