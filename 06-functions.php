<?php
/* ------------ Functions ----------- */

/*
Functions are reusable blocks of code that we can call to perform a specific task.
We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope

/*
 ** Function Syntax
function functionName($arg1, $arg2, ...) {
// code to be executed
}
 */

// function registerUser()
// {
//     echo "User has been registered!";
// }

// function add($num1, $num2)
// {
//     return $num1 + $num2;
// }

// echo add(213, 32);

// arrow functions

$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(84, 94);