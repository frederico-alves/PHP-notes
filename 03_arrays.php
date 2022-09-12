<?php
// Simple Array
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'banana');

//print_r($numbers);
//var_dump($numbers);
//echo $fruits[0];

// Associative Array
//$people = array('Frederico' => 26, 'John' => 30, 'Jane' => 25);
//$people = [
//    'Frederico' => 26,
//    'John' => 30,
//    'Jane' => 25
//];

//echo $people['Fred'];

//$hex = [
//    'red' => '#f00',
//    'blue' => '#00f',
//    'green' => '#0f0'
//];

//echo $hex['green'];

//$person = [
//    'name' => 'Frederico',
//    'age' => 26,
//    'hobbies' => ['music', 'movies', 'sports']
//];
//
//echo $person['hobbies'][1];

// Multidimensional Array
$people = [
    [
        'name' => 'Frederico',
        'age' => 26,
        'hobbies' => ['badminton', 'festivals', 'coding']
    ],
    [
        'name' => 'John',
        'age' => 30,
        'hobbies' => ['musicals', 'cinema', 'football']
    ],
    [
        'name' => 'Jane',
        'age' => 25,
        'hobbies' => ['reading', 'gaming', 'volleyball']
    ]
];

//echo $people[1]['name'];
var_dump(json_encode($people));