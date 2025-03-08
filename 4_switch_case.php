<?php
$score = 85;

switch (true) { 
    case ($score >= 90):
        echo "Xếp loại A";
        break;
    case ($score >= 75):
        echo "Xếp loại B";
        break;
    case ($score >= 50):
        echo "Xếp loại C";
        break;
    default:
        echo "Xếp loại D";
}
?>
// Output: Xếp loại B