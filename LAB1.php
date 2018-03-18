<?php

/**
 * Array functions
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 15.07.2016
 */

$array = range(1, 10);
shuffle($array);

echo 'IMPLODE ARRAY' . PHP_EOL;
echo 'Original array: ' . PHP_EOL;
print_r($array);
echo 'First element: ' . current($array) . PHP_EOL;
echo 'Last element: ' . end($array) . PHP_EOL;
echo 'Elements in array: ' . count($array) . PHP_EOL;
echo 'Result string: ' . implode(', ', $array);

echo PHP_EOL . PHP_EOL;

echo 'EXPLODE STRING' . PHP_EOL;
$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem sed leo dictum, ut maximus orci commodo. Ut nec.';
echo 'Original text: ' . PHP_EOL . $string . PHP_EOL;
$arrayFromString = explode(' ', $string);
print_r($arrayFromString);

echo PHP_EOL . PHP_EOL;

echo 'MARGE TWO ARRAYS' . PHP_EOL;
$firstArray = [];
array_push($firstArray, 'banana');
array_push($firstArray, 'apple');
array_push($firstArray, 'grape');
echo 'Array one:' . PHP_EOL;
print_r($firstArray);
$secondArray = ['raspberry', 'orange'];
echo 'Array two:' . PHP_EOL;
print_r($secondArray);
echo 'Result array:' . PHP_EOL;
print_r(array_merge($firstArray, $secondArray));
