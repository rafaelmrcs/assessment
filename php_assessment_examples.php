<?php

// Question 5: Indexed array.
$colors = ["red", "green", "blue"];

echo "Colors:\n";
foreach ($colors as $color) {
    echo "- " . $color . "\n";
}

echo "\n";

// Question 7: Simple if/else statement.
$score = 75;

if ($score > 50) {
    echo "Passed\n";
} else {
    echo "Failed\n";
}

echo "\n";

// Question 9: Custom function with one parameter.
function greet($name) {
    return "Hello, " . $name;
}

echo greet("Rafael") . "\n";

echo "\n";

// Question 11: String concatenation.
$firstName = "Ada";
$lastName = "Lovelace";
$fullName = $firstName . " " . $lastName;

echo $fullName . "\n";
