<?php

$file = 'extras/users.txt';

if(file_exists($file)) {
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    fclose($handle);
    echo $data;
} else {
//    echo 'File does not exist';
    $handle = fopen($file, 'w');
    $data = 'Frederico' . PHP_EOL . 'John' . PHP_EOL . 'Jane';
    fwrite($handle, $data);
    fclose($handle);
}