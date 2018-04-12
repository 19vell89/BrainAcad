<?php

use Figures\Figures;
use Figures\Rectangle;
use Figures\Square;

//include_once 'Figures.php';
//include_once 'Rectangle.php';
//include_once 'Square.php';
include_once 'Teapot.php';

$teapot = new teapot ($teapot,$model,$black,3,true);
echo $teapot->fill(2);
echo $teapot->is_connected(false);
echo $teapot->pour_out(2.4);
echo $teapot->turn_on(1,5);

$host = '127.0.0.1';
$db   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

//УДАЛЕНИЕ
//$query = $pdo->prepare("DELETE FROM groups WHERE name = 'New group'");
//$query->execute ();


//$query = $pdo->query('SELECT students.name, surname, groups.name
//FROM students LEFT JOIN groups ON students.group_id = groups.id
//WHERE surname = "Иванов"');
//$query->setFetchMode(PDO::FETCH_NUM);
//$result = $query->fetchAll();
//var_dump($result);


//ВСТАВКА
//$query = $pdo->prepare ('INSERT INTO students (name, surname) VALUES (?,?)');
//$query->execute (['New', 'Student']);
//$query->execute (['One more', 'Student']);


//$query = $pdo->prepare ('INSERT INTO students (name, surname) VALUES (::name,::surname)');
//$query->execute (['name'=>'Student', 'surname'=>'New']);
//$query = $pdo->prepare ('INSERT INTO groups (name) VALUES (?)');
//$query->execute (['New group']);



// ПОСТРОЕНИЕ АВТОЗАГРУЗЧИКА:
//spl_autoload_register(function ($className) {
//    include_once str_replace('\\','/',$className) . '.php';
//});


//комманды для SQL

//CREATE TABLE students(
//    id INT UNSIGNED AUTO_INCREMENT,
//    name VARCHAR (100) NOT NULL,
//    surname VARCHAR (100) NOT NULL,
//    PRIMARY KEY (id)
//    )
////
//CREATE TABLE subjects(
//    id INT UNSIGNED AUTO_INCREMENT,
//	  name VARCHAR (30) NOT NULL, UNIQUE
//    PRIMARY KEY (id)
//    )

//INSERT INTO groups (name) VALUES ("Группа2"), ("Группа3"),("Группа4"),("Группа5");
//
//ALTER TABLE students ADD COLUMN group_id INT UNSIGNED;
//
//ALTER TABLE students ADD CONSTRAINT fk_students_groups FOREIGN KEY (group_id) REFERENCES groups (id);

//INSERT INTO `students` (`id`, `name`, `surname`, `group_id`) VALUES (NULL, 'Петя', 'Иванов', '3');

//SELECT * FROM students WHERE surname = "Иванов";
//
//SELECT s.name, surname, g.name
//FROM students as s, groups as g
//WHERE s.group_id = g.id AND surname = "Иванов";
//
//SELECT students.name, surname, groups.name
//FROM students LEFT JOIN groups ON students.group_id = groups.id
//WHERE surname = "Иванов";

//CREATE TABLE marks (
//    id INT UNSIGNED AUTO_INCREMENT,
//    mark TINYINT UNSIGNED NOT NULL,
//    subject_id INT UNSIGNED NOT NULL,
//    student_id INT UNSIGNED NOT NULL,
//    PRIMARY KEY (id),
//    FOREIGN KEY (subject_id) REFERENCES subjects(id),
//    FOREIGN KEY (student_id) REFERENCES students(id)
//)

//CREATE TABLE sales (
//    id INT UNSIGNED AUTO_INCREMENT,
//    date_of_sale DATE NOT NULL,
//    goods_id INT UNSIGNED NOT NULL,
//    sellers_id INT UNSIGNED NOT NULL,
//    PRIMARY KEY (id),
//    FOREIGN KEY (goods_id) REFERENCES goods(id),
//    FOREIGN KEY (sellers_id) REFERENCES sellers(id)
//)

//SELECT sellers.name, surname, goods.name
//FROM sellers LEFT JOIN goods ON sellers.goods_id = goods.id
//WHERE surname = "Иванов";

//SELECT *
//FROM students LEFT JOIN groups ON students.group_id = groups.id
//LEFT JOIN marks ON students.id = marks.student_id

//$rectangle = new Rectangle(68,770);
//echo $rectangle->getArea();
//echo '<br>';
//echo $rectangle->getPerimeter();
//echo '<br>';
//echo $rectangle->getName();
//echo '<br>';

//echo Figures::$description;
//echo '<br>';
//echo '<br>';
//echo '<br>';
//$square = new Square(65);
//echo $square->getArea();
//echo '<br>';
//echo $square->getPerimeter();
//echo '<br>';
//echo $square->getName();
//echo '<br>';
//echo '<br>';
//echo '<br>';
//$circle = new Circle(6);
//echo '<br>';
//echo $circle->getArea();
//echo '<br>';
//echo $circle->getPerimeter();
//echo '<br>';
//echo $circle->getName();

//Task3
//$str = "atlantic ocean is the second largest ocean in the world";
//$q = strrev($str);
//echo "$q";
//$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
//var_dump(array_count_values ($chars));
//echo "<br>";
//foreach (count_chars($str, 1) as $i => $val) {
//    var_dump(chr($i));
//    var_dump($val);
//}

//Task6
//$arr = [1, 2, 3, 4, 5];
//foreach ($arr as $elem) {
//    echo $arr2 = ($elem * $elem);
//    var_dump ($arr2 = array([$arr2]));
//}
//var_dump($arr);
//Task5
//$a=555;
//$a= array (1,4,67,3,22,56);
//if (is_integer($a)){
//    echo "value of int a is '$a'";
//} else {
//    for ($i=0; $i<= count($a); $i++) {
//        echo "value of index $i in array a is $a[$i]<br>";
//    }
//}