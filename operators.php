<?php

echo "<h2>1. Arithmetic Operators</h2>";
$x = 10;
$y = 5;
echo "Addition: " . ($x + $y) . "<br>";
echo "Subtraction: " . ($x - $y) . "<br>";
echo "Multiplication: " . ($x * $y) . "<br>";
echo "Division: " . ($x / $y) . "<br>";
echo "Modulus: " . ($x % $y) . "<br>";
echo "Exponentiation: " . ($x ** $y) . "<br>"; // PHP 5.6+

echo "<h2>2. Assignment Operators</h2>";
$a = 10;
echo "Initial value of \$a: " . $a . "<br>";
$a += 5; // $a = $a + 5
echo "\$a after += 5: " . $a . "<br>";
$a -= 3; // $a = $a - 3
echo "\$a after -= 3: " . $a . "<br>";
$a *= 2; // $a = $a * 2
echo "\$a after *= 2: " . $a . "<br>";
$a /= 4; // $a = $a / 4
echo "\$a after /= 4: " . $a . "<br>";
$a %= 2; // $a = $a % 2
echo "\$a after %= 2: " . $a . "<br>";
$b = "Hello";
$b .= " World"; // $b = $b . " World"
echo "\$b after .= \" World\": " . $b . "<br>";

echo "<h2>3. Comparison Operators</h2>";
$val1 = 10;
$val2 = "10";
$val3 = 20;

echo "\$val1 = 10, \$val2 = \"10\", \$val3 = 20<br>";
echo "val1 == val2 (Equal): " . (int)($val1 == $val2) . " (true)<br>";
echo "val1 === val2 (Identical): " . (int)($val1 === $val2) . " (false)<br>";
echo "val1 != val3 (Not Equal): " . (int)($val1 != $val3) . " (true)<br>";
echo "val1 !== val2 (Not Identical): " . (int)($val1 !== $val2) . " (true)<br>";
echo "val1 < val3 (Less Than): " . (int)($val1 < $val3) . " (true)<br>";
echo "val3 > val1 (Greater Than): " . (int)($val3 > $val1) . " (true)<br>";
echo "val1 <= val2 (Less Than or Equal To): " . (int)($val1 <= $val2) . " (true)<br>";
echo "val3 >= val1 (Greater Than or Equal To): " . (int)($val3 >= $val1) . " (true)<br>";

// Spaceship operator (PHP 7+)
echo "Spaceship Operator (\$val1 <=> \$val3): " . ($val1 <=> $val3) . " (-1)<br>";
echo "Spaceship Operator (\$val3 <=> \$val1): " . ($val3 <=> $val1) . " (1)<br>";
echo "Spaceship Operator (\$val1 <=> \$val2): " . ($val1 <=> $val2) . " (0)<br>";


echo "<h2>4. Increment/Decrement Operators</h2>";
$c = 10;
echo "Initial \$c: " . $c . "<br>";
echo "Pre-increment ++c: " . (++$c) . " (c is now 11)<br>";
echo "Post-increment c++: " . ($c++) . " (c is now 12)<br>";
echo "Current \$c: " . $c . "<br>";
echo "Pre-decrement --c: " . (--$c) . " (c is now 11)<br>";
echo "Post-decrement c--: " . ($c--) . " (c is now 10)<br>";
echo "Current \$c: " . $c . "<br>";

echo "<h2>5. Logical Operators</h2>";
$bool1 = true;
$bool2 = false;

echo "\$bool1 = true, \$bool2 = false<br>";
echo "bool1 and bool2: " . (int)($bool1 and $bool2) . " (false)<br>";
echo "bool1 or bool2: " . (int)($bool1 or $bool2) . " (true)<br>";
echo "bool1 xor bool2: " . (int)($bool1 xor $bool2) . " (true)<br>";
echo "!bool1: " . (int)(!$bool1) . " (false)<br>";

echo "<h2>6. String Operators</h2>";
$str1 = "Hello";
$str2 = " World";
echo "Concatenation: " . ($str1 . $str2) . "<br>";

$str3 = "Hello";
$str3 .= " PHP";
echo "Concatenation Assignment: " . $str3 . "<br>";

echo "<h2>7. Array Operators</h2>";
$arr1 = ["a" => "red", "b" => "green"];
$arr2 = ["c" => "blue", "d" => "yellow"];
$arr3 = ["a" => "red", "b" => "green"];
$arr4 = ["b" => "green", "a" => "red"]; // Same elements, different order for identity comparison

echo "\$arr1 = ['a' => 'red', 'b' => 'green']<br>";
echo "\$arr2 = ['c' => 'blue', 'd' => 'yellow']<br>";
echo "\$arr3 = ['a' => 'red', 'b' => 'green']<br>";
echo "\$arr4 = ['b' => 'green', 'a' => 'red']<br>";

echo "Union (\$arr1 + \$arr2): ";
print_r($arr1 + $arr2);
echo "<br>";

echo "Equality (\$arr1 == \$arr3): " . (int)($arr1 == $arr3) . " (true)<br>";
echo "Identity (\$arr1 === \$arr3): " . (int)($arr1 === $arr3) . " (true)<br>";
echo "Identity (\$arr1 === \$arr4): " . (int)($arr1 === $arr4) . " (false - order matters)<br>";
echo "Inequality (\$arr1 != \$arr2): " . (int)($arr1 != $arr2) . " (true)<br>";

echo "<h2>8. Conditional Assignment Operators</h2>";
// Ternary
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Age 20: " . $status . "<br>";

// Null Coalescing Operator (PHP 7+)
$name = $_GET['user'] ?? "Guest";
echo "User name (from \$_GET['user'] or 'Guest'): " . $name . "<br>";
$foo = null;
$bar = 'default';
$result = $foo ?? $bar;
echo "\$foo ?? \$bar: " . $result . "<br>";

echo "<h2>9. Error Control Operators</h2>";
// Suppress error warnings
echo "Attempting to open a non-existent file with @: ";
$file = @fopen("non_existent_file.txt", "r");
if (!$file) {
    echo "File not found (error suppressed).<br>";
}

echo "<h2>10. Execution Operators</h2>";
echo "Listing directory contents using backticks: <pre>";
// This will run the `dir` command on Windows or `ls` on Linux/macOS
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo `dir`;
} else {
    echo `ls -l`;
}
echo "</pre>";

echo "<h2>11. Type Operators</h2>";
class MyClass {}
class MySubClass extends MyClass {}
$obj = new MyClass();
$subObj = new MySubClass();
$notObj = "hello";

echo "\$obj is instanceof MyClass: " . (int)($obj instanceof MyClass) . " (true)<br>";
echo "\$subObj is instanceof MyClass: " . (int)($subObj instanceof MyClass) . " (true)<br>";
echo "\$notObj is instanceof MyClass: " . (int)($notObj instanceof MyClass) . " (false)<br>";
?>
