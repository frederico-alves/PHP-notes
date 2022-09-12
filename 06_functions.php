<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

//$y = 12;
//
//function registerUser(){
//    global $y;
//    echo $y;
//    echo 'User Registered';
//}
//
//registerUser();

//function registerUser($email){
//    echo $email . ' is now registered.';
//}
//
//registerUser('fredericoalves.info@gmail.com');

//=== SUM FUNCTION ===

//function sum($n1, $n2){
//    return $n1 + $n2;
//}
//
////echo sum(2, 3);
//$total = sum(6, 3);
//echo $total;

function sum($n1 = 5, $n2 = 5){
    return $n1 + $n2;
}
echo sum();

// Anonymous Function because it has no name and is assigned to a variable
 $greet = function(){
    echo 'Hello World';
};

$greet();

$subtract = function($n1, $n2){
    return $n1 - $n2;
};

echo $subtract(10, 9);

// Arrow Function
$greet = fn() => 'Hello World';
echo $greet();

$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(5, 5);