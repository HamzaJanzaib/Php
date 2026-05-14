<?php
// PHP data types example: basic to advanced

// Basic scalar values
$int = 42;
$float = 3.14;
$string = "Hello PHP";
$bool = true;

// Array types
$array = [1, "two", 3.0, false];
$assoc = ["name" => "Alice", "age" => 30];

// Constant definitions
define("SITE_NAME", "My PHP Site");
const VERSION = "1.0";

// Null type
$nullValue = null;

// Object type using stdClass
$obj = new stdClass();
$obj->title = "PHP Data Types";
$obj->count = 5;

// Output values with echo
echo "Integer: $int<br>";
echo "Float: $float<br>";
echo "String: $string<br>";
echo "Boolean: " . ($bool ? "true" : "false") . "<br>";
echo "Array first item: {$array[0]}<br>";
echo "Assoc name: {$assoc['name']}<br>";
echo "Constant SITE_NAME: " . SITE_NAME . "<br>";
echo "Const VERSION: " . VERSION . "<br>";
echo "Null value: " . var_export($nullValue, true) . "<br>";
echo "Object title: {$obj->title}<br>";

// Advanced: function with type declarations
function addNumbers(int $a, float $b): float
{
    return $a + $b;
}
$result = addNumbers(5, 2.5);
echo "Add numbers result: $result<br>";

// Advanced: union type (PHP 8+)
function getValue(int|string $value): string
{
    return "Value: $value";
}
echo getValue("union type") . "<br>";
echo getValue(100) . "<br>";

// Advanced: typed properties with nullable type
class User
{
    public int $id;
    public string $name;
    public ?string $email = null;

    public function __construct(int $id, string $name, ?string $email = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

$user = new User(1, "Bob", "bob@example.com");
echo "User name: {$user->name}<br>";
echo "User email: " . ($user->email ?? "none") . "<br>";

// Debug output for complex types
var_dump($array, $assoc, $obj, $user);
