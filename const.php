<?php

// Basic PHP constant examples and rules

// 1. Define a constant using define()
//    - Constant names are usually uppercase by convention.
//    - Once defined, a constant cannot be changed or undefined.
//    - Constants are globally accessible.

define('SITE_NAME', 'Books Spine');
define('MAX_ITEMS', "10K");

echo "Site name: " . SITE_NAME . "\n";
echo "Maximum items: " . MAX_ITEMS . "\n";

// 2. Define a constant using const inside global scope
const VERSION = '1.0.0';
const ENABLE_FEATURE = true;
const data = 'example';

echo "Version: " . VERSION . "\n";
echo "Feature enabled: " . (ENABLE_FEATURE ? 'yes' : 'no') . "\n";
echo "Data: " . data . "\n";

// 3. Constant names must start with a letter or underscore, not a number.
//    Valid: MY_CONST, _MY_CONST
//    Invalid: 123_CONST

// 4. Constant values can be scalar or arrays (PHP 5.6+ for arrays with define, PHP 7+ for const array).

define('COLORS', ['red', 'green', 'blue']);
const STATUS_CODES = [200, 404, 500];

echo "First color: " . COLORS[0] . "\n";
echo "First status code: " . STATUS_CODES[0] . "\n";

// 5. Constants are case-sensitive by default. Avoid using case-insensitive constants.
//    define('FOO', 'bar');  // case-sensitive
//    define('FOO_LOWER', 'bar', true); // deprecated and not recommended

// 6. You cannot use variables or expressions with const in global scope; use literals.
//    const BAD_CONST = SOME_VAR; // invalid
//    define('GOOD_CONST', 'value:' . '123'); // valid with define()

define('EXPRESSION_CONST', 'value:' . 123);
echo "Expression constant: " . EXPRESSION_CONST . "\n";

// 7. Use constants for values that should never change, such as configuration settings.

?>