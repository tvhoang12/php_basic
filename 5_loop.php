<?php
// for loop
//calculate the sum of the first 100 natural numbers start at a
$a = 1;
$sum = 0;
for ($i = $a; $i <= 100; $i++) {
    $sum += $i;
}
echo "The sum of the first 100 natural numbers start at $a is $sum\n";

// while loop
//calculate the sum of the first 100 natural numbers start at a
$a = 1;
$sum = 0;
$i = $a;
while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo "The sum of the first 100 natural numbers start at $a is $sum\n";

//do while loop
//calculate the sum of the first 100 natural numbers start at a
$a = 1;
$sum = 0;
$i = $a;
do {
    $sum += $i;
    $i++;
} while ($i <= 100);
echo "The sum of the first 100 natural numbers start at $a is $sum\n";

//foreach loop
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value\n";
}

?>