
<!-- testing url: http://localhost/php/html.php -->
<?php
$recipientName = "Hamza";
$recipientEmail = "hamza@example.com";
$senderName = "Support Team";

$emailTemplate = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: 20px auto; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .header { background-color: #007bff; color: white; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
        .content { padding: 20px; }
        .footer { background-color: #f4f4f4; padding: 10px; text-align: center; font-size: 12px; color: #666; }
        .button { background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 3px; display: inline-block; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>Welcome to Our Service</h1>
        </div>
        <div class='content'>
            <p>Hello <strong>" . htmlspecialchars($recipientName) . "</strong>,</p>
            <p>Thank you for signing up! We're excited to have you on board.</p>
            <p>Please verify your email address by clicking the button below:</p>
            <p style='text-align: center; margin: 30px 0;'>
                <a href='http://localhost/php/verify.php?email=" . urlencode($recipientEmail) . "' class='button'>Verify Email</a>
            </p>
            <p>If you didn't create this account, please ignore this email.</p>
            <p>Best regards,<br/><strong>" . htmlspecialchars($senderName) . "</strong></p>
        </div>
        <div class='footer'>
            <p>&copy; 2024 Our Company. All rights reserved.</p>
            <p>Contact us: support@example.com</p>
        </div>
    </div>
</body>
</html>
";

echo $emailTemplate;
?>