<?
$myString = "Hello World!";
// 1. string len
echo strlen($myString) . "\n";
// 2. string to lower
echo strtolower($myString) . "\n";
// 3. string to upper
echo strtoupper($myString) . "\n";
// 4. string replace
echo str_replace("World", "PHP", $myString) . "\n";
// 5. string repeat
echo str_repeat($myString, 3) . "\n";
// 6. string substring
echo substr($myString, 6, 5) . "\n";
// 7. string compare
echo strcmp("Hello", "Hello") . "\n";
// 8. string word count
echo str_word_count($myString) . "\n";
// 9. string reverse
echo strrev($myString) . "\n";
// 10. string position
echo strpos($myString, "World") . "\n";
// 11. string trim
echo trim("   Hello World!   ") . "\n";
// 12. string explode
$myArray = explode(" ", $myString);
print_r($myArray);

// 13. uppercase
echo strtoupper($myString) . "\n";
// 14. lowercase
echo strtolower($myString) . "\n";
// 15. string reverse
echo strrev($myString) . "\n";

//16. string concatenation
echo $myString . " PHP\n";
//17. string slice
echo substr($myString, 6, 5) . "\n";

?>