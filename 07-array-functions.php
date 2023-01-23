<?php

$fruits = ["apple", "banana", "orange"];

// echo in_array("banana", $fruits);

// var_dump(in_array("banana", $fruits));

$fruits[] = "grape";

// print_r($fruits);

array_push($fruits, "mango", "raspberry");
array_unshift($fruits, "kiwi");
print_r($fruits);

array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);
print_r($fruits);

$arr = [1, 2, 3];
$arr = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);

$arr4 = [...$arr1, ...$arr2];

//  COMBINE ARRAYS (keys and values)
// $a = ['green',]