<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
 ** For Loop Syntax
for (initialize; condition; increment) {
// code to be executed
}
 */

for ($x = 0; $x <= 10; $x += 3) {
    echo "Number: $x <br>";
}
;

/* ------------ While Loop ------------ */

/*
 ** While Loop Syntax
while (condition) {
// code to be executed
}
 */

/* ---------- Do While Loop --------- */

/*
 ** Do While Loop Syntax
do {
// code to be executed
} while (condition);

do...while loop will always execute the block of code once, even if the condition is fal

/* ---------- Foreach Loop ---------- */

/*
 ** Foreach Loop Syntax
foreach ($array as $value) {
// code to be executed
}
 */

$persons = [
    "first_name" => "Ryan",
    "last_name" => "Azur",
    "email" => "jeorge@gmail.com",
];

foreach ($persons as $person) {
    echo $person;
}