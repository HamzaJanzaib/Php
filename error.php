<?php

echo phpinfo();

// Basic error testing and handling in PHP
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    echo "Custom error handler: [$errno] $errstr in $errfile on line $errline<br>";
    return true;
});

function divide($a, $b) {
    if ($b === 0) {
        trigger_error("Division by zero", E_USER_WARNING);
        return null;
    }
    return $a / $b;
}

echo "Start testing error handling<br>";
$result = divide(10, 0);
if ($result === null) {
    echo "Handled division error.<br>";
} else {
    echo "Result: $result<br>";
}

restore_error_handler();
echo "End of script<br>";
?>