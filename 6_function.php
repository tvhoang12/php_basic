<?php
/**
 * check so nguyen to
 */
// biến toàn cục
$global = 10;

function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function staticVariable() {
    static $count = 0;
    $count++;
    // biến cục bộ
    $local = 10;
    echo "Local variable count is: $local\n";
    echo "Static variable count is: $count\n";
}
 if (isPrimeNumber($global)) {
     echo "$global la so nguyen to";
 } else {
     echo "$global khong phai la so nguyen to";
 }


?>