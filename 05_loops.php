<?php

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

//for($i = 0; $i <= 10; $i++){
//    echo "Number: $i <br>";
//}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

//$i = 1;
//
//while($i <= 15){
//    echo "Number: $i <br>";
//    $i++;
//}

/* ------------ Do While Loop ------------ */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

//$i = 6;
//
//do {
//    echo "Number: $i <br>";
//    $i++;
//} while($i <= 5);

/* ------------ Foreach Loop ------------ */
// Specific for Arrays(!)
/*
** Foreach Loop Syntax
  foreach ($array as $value) {
    // code to be executed
    //echo $value;
  }
*/

//$people = ['Brad', 'Jose', 'William'];

//for($i = 0; $i < count($people); $i++){
//    echo $people[$i] . '<br>';
//}

//foreach($people as $person){
//    echo $person . '<br>';
//}

//foreach($people as $index => $person){
//    echo $index . ' - ' . $person . '<br>';
//}

$person = [
    'first_name' => 'Frederico',
    'last_name' => 'Alves',
    'age' => 26
];

foreach($person as $key => $value){
//    echo $key . ' - ' . $value . '<br>';
    echo "${key} - ${value} <br>";
}
