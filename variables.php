<?php
// Variables in PHP
// variables are used to store data and can be of different types such as strings, integers, floats, etc.
$name = "John";
$age = 30;
$height = 5.9;
$isAdmin = true;
$habits = ["reading", "coding", "traveling"];
$data = null; // This variable is currently null


# Displaying the variables
echo "Name: "  . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Admin: " . ($isAdmin ? "Yes" : "No") . "<br>";
echo "Habits: " . implode(", ", $habits) . "<br>";
echo "Data: " . ($data === null ? "null" : $data) . "<br>";
?>