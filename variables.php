<?php
// Variables in PHP
// variables are used to store data and can be of different types such as strings, integers, floats, etc.
$name = "John";
$age = 30;
$height = 5.9;
$isAdmin = true;
$habits = ["reading", "coding", "traveling"];
$data = null; // This variable is currently null
$post = [
    "title" => "Hello World",
    "content" => "This is my first post.",
    "author" => "John Doe"
];

echo "<h1 style='color: blue;'>Variables in PHP</h1>";

# Displaying the variables
echo "Name: "  . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Admin: " . ($isAdmin ? "Yes" : "No") . "<br>";
echo "Habits: " . implode(", ", $habits) . "<br>";
echo "Data: " . ($data === null ? "null" : $data) . "<br>";

echo "<hr>";
echo "Post Title: " . $post["title"] . "<br>";
echo "Post Content: " . $post["content"] . "<br>";
echo "Post Author: " . $post["author"] . "<br>";
?>