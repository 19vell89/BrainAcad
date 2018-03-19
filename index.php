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
$arr1 = array(
    "key1" => "Brain",
    "key2" => "Academy",
    "key3" => "students",
    "key4" => "are simply the best!",
);
var_dump($arr1);
echo $arr1;
$arr1["key4"]="will be programmers soon!";
var_dump($arr1);
print_r($arr1);

unset ($arr1["key4"]);
var_dump($arr1);
$arr1["key4"]="will be programmers soon!";

print_r(array_count_values ($arr1));

$arr2 = array(
    "key5" => "i",
    "key6" => "will be",
    "key7" => "programmer soon",
);
print_r(array_merge($arr1,$arr2));
var_dump(array_merge($arr1,$arr2));

$arrNum = array (12,31,47,53,80,53,4,38);
$arrNum1 = array (11,30,46,52,79,52,3,37);
var_dump ($arrNum);

var_dump (array_rand($arrNum));

echo "Delete first value from array arrNum <br>";
var_dump (array_shift($arrNum));
var_dump ($arrNum);

array_unshift($arrNum,12);
echo "Add first value into array arrNum <br>";
var_dump ($arrNum);
echo "Combine of arrays arrNum $ arrNum1 <br>";
var_dump (array_combine($arrNum,$arrNum1));
echo "Values of array arrNum <br>";
print_r (array_values($arrNum));

$arrNum2 = array (11,30, 54, 54, 77, 44, 76, 87, 32, 54, 76, 88, 98, 3, 6, 3 ,65, 46,52,79,52,3,37);
echo "Sum of numbers array arrNum2 <br>";
print_r (count ($arrNum2));

print_r (rsort($arrNum2,1));

?>