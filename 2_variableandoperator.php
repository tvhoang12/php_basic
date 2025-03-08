<?php
// phép gán
$a = 12;
$b = 3;

// phép toán số học
echo("a + b = ". $a + $b . "\n"); // 15
echo("a - b = " . $a - $b . "\n"); // 9
echo("a * b = " . $a * $b. "\n"); // 36
echo("a / b = " . $a / $b. "\n"); // 9
echo("a % b = " . $a % $b. "\n"); // 0


// Phép toán so sánh
echo "a == b: " . (($a == $b) ? "true" : "false") . "\n";
echo "a != b: " . (($a != $b) ? "true" : "false") . "\n";
echo "a > b: " . (($a > $b) ? "true" : "false") . "\n";
echo "a < b: " . (($a < $b) ? "true" : "false") . "\n";
echo "a >= b: " . (($a >= $b) ? "true" : "false") . "\n";
echo "a <= b: " . (($a <= $b) ? "true" : "false") . "\n";

// Phép toán logic
echo "a && b: " . (($a && $b) ? "true" : "false") . "\n";
echo "a || b: " . (($a || $b) ? "true" : "false") . "\n";
echo "!a: " . ((!$a) ? "true" : "false") . "\n";
echo "!b: " . ((!$b) ? "true" : "false") . "\n";

?>