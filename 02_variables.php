<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$fname = "ryan";
$age = 41;
$hashKids = false;
$cashOnHand = 10.5;





// echo "$fname is $age years old";
// echo $fname . " is " . $age . " years old";
echo nl2br("\n$fname is $age years old");


echo "<br>";

echo "5" + "5";
echo "<br>";

$x = "5" + "5";
echo "<br>";
echo $x;
echo "<br>";
echo 61+123;

echo $fname . ' is ' . $age . ' years old'; 
echo nl2br("\n$fname is $age years old");

//Arithmetic Operators
echo $fname . ' is ' . $age . ' years old'; 
echo nl2br("\n$fname is $age years old");

//Arithmetic Operators
echo "<br>";

echo '5' + '5';
$x = '5' + '5';
echo "<br>";
echo $x;
echo "<br>";
var_dump($x);
echo "<br>";
echo 5 + 5;

echo "<br>";
echo 10 -6;

echo "<br>";
echo 95 * 95;

echo "<br>";
echo 500 / 25;

//Constants - Cannot be changed
echo "<br>";
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

var_dump(HOST);








?>
    
</body>
</html>