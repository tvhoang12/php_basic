<?
// create array 
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

$cars = ["Volvo", "BMW", "Toyota"];
var_dump($cars);

$myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
];
var_dump($mycar);

// count the number of elements in the array
echo count($cars) . "\n";

// index array
for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . "\n";
}

// chang element in array
$cars[0] = "Opel";
echo $cars[0] . "\n";

// add element to the end of the array
array_push($cars, "Mazda");
var_dump($cars);

// add element to the beginning of the array
array_unshift($cars, "Mercedes");
var_dump($cars);

// change the element of the array
$cars[1] = "Ford";
var_dump($cars);

?>