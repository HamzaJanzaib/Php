
<!-- testing url: http://localhost/php/ -->
<?php
$title = "Home Page";
$heading = "Welcome to My Website";
$welcome_text = "This is my personal homepage built with PHP";
$author = "Your Name";
$year = date("Y");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f4; }
        .container { max-width: 800px; margin: 0 auto; background-color: white; padding: 30px; border-radius: 8px; }
        h1 { color: #333; }
        footer { margin-top: 40px; text-align: center; color: #666; border-top: 1px solid #ddd; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $heading; ?></h1>
        <p><?php echo $welcome_text; ?></p>
        <hr>
        <p>Feel free to explore my website and learn more about me.</p>
    </div>
    <footer>
        <p>&copy; <?php echo $year; ?> <?php echo $author; ?>. All rights reserved.</p>
    </footer>
</body>
</html>