<?php
//echo "Hello, world!\n";
//$arr = array(1,2,3,4,5,56,5,6,67,6,7,676765,456,5,6,343,43,434);
//echo "$b<br>";
//echo "I'm here<br>";
//echo "I'm here<br>";
//$tmp=222;
//echo $tmp;
//$a = 'command "Leverpool" has been winned<br>';
//$d= 777;
//$b= 'Value of variable $a<br>';
//$c= "Value of variable $d";
//var_dump ($c);
//$abc = strlen($b);
//echo $abc;
//$pos = strpos($b, 'of');
//echo $pos;
//$arr = [1,2,3,4,5,6,7,8,900];
//var_dump ($arr);
//$arr[1];
////получим 2-ку
//echo $arr[1];
//$arr = [1,2,3,4,[345,4545,2342],6,7,8,900];
//echo $arr[4][2];
//$img = imageCreate(1000, 700);
//$colors_bg = imageColorAllocate($img,120,100,180);
//header("Content-type: image/png");
//imagejpeg($img);
//$im = imageCreate(700, 200);
//$colors_bg = imageColorAllocate($img,220,140,100);
//header("Content-type: image/png");
//imagejpeg("$im\n");
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
?>