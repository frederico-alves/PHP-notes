<?php

$fruits = ['Apple', 'Banana', 'Orange', 'Grape', 'Pineapple'];

// Get the values
foreach($fruits as $fruit){
//    echo $fruit . '<br>';
}

// Get length of array
//echo count ($fruits);

// Search for value in array
//var_dump(in_array('Apple', $fruits));

// Add value to array
$fruits[] = 'Melon'; // Add single value
array_push($fruits, 'Peach', 'Lemon'); // Add multiple values
array_unshift($fruits, 'Strawberry'); // Add to beginning of array
//print_r($fruits);

// Remove value from array
array_pop($fruits); // Remove last value
array_shift($fruits); // Remove first value
unset($fruits[1]); // Remove specific value at index

//print_r($fruits);

// Split into chunks of 3
$chunked = array_chunk($fruits, 3);
//print_r($chunked);


// Combine arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
//
//$arrA = array_merge($arr1, $arr2);
$arrB = [...$arr1, ...$arr2];
//print_r($arrB);


// Associative arrays
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
//print_r($c);


// Array keys and values
$keys = array_keys($c);
//print_r($keys);

$flipped = array_flip($c);
//print_r($flipped);

// Create array from range of numbers
$arrayNumbers = range(0, 14);
print_r($arrayNumbers);

$arrayNumbersStep = range(0, 20, 5);
//print_r($arrayNumbersStep);

// Map through array and create a new one
$newNumbers = array_map(function($number){
    return "Number: $number";
}, $arrayNumbers);

//print_r($newNumbers);

// Filter array
$lessThan10 = array_filter($arrayNumbers, fn($number) => $number <= 10);
//print_r($lessThan10);

// Reduce array
// "carry" holds the return value of the previous iteration
//
$sum = array_reduce($arrayNumbers, fn($carry, $number) => $carry + $number);
var_dump($sum);