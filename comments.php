<?php

// PHP comment examples and use case rules
// Use comments to explain intent, mark sections, or disable code.

/*
  Comment types in PHP:
  - Single-line comment: // or #
  - Multi-line comment: /* ... * / (without the space)
  - DocBlock comment: /** ... * /
*/

// Rule 1: Use comments to explain why code exists, not what it does.
// Rule 2: Keep comments up to date when you change code.
// Rule 3: Avoid redundant comments that simply restate the code.

/**
 * Example use case: a small comment system function.
 * This shows how comments document the purpose and rules.
 */
function addComment(string $author, string $message): array
{
    // Validate inputs before storing the comment.
    if (trim($author) === '' || trim($message) === '') {
        return [
            'success' => false,
            'error' => 'Author and message cannot be empty.'
        ];
    }

    // Sample comment record, normally saved to a database.
    return [
        'success' => true,
        'comment' => [
            'author' => $author,
            'message' => $message,
            'created_at' => date('Y-m-d H:i:s')
        ]
    ];
}

// Example usage:
$result = addComment('Alice', 'This is a PHP comment example.');

// Output the result for debugging or display.
if ($result['success']) {
    echo "Comment added by: " . htmlspecialchars($result['comment']['author']) . "\n";
    echo "Message: " . htmlspecialchars($result['comment']['message']) . "\n";
} else {
    echo "Error: " . htmlspecialchars($result['error']) . "\n";
}
