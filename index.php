
<!-- testing url: http://localhost/php/ -->
<?php
$title = "Home Page";
$heading = "Welcome to My Website";
$welcome_text = "This is my personal homepage built with PHP";
$author = "Hamza";
$year = date("Y");

// Sample data for sections
$categories = ["Electronics", "Books", "Clothing", "Home & Garden"];
$products = [
    ["name" => "Laptop", "price" => "$999", "image" => "https://i5.walmartimages.com/seo/HP-15-6-Ryzen-5-8GB-256GB-Laptop-Rose-Gold_36809cf3-480b-47a5-94f0-e1d5e70c58c0_3.fcc0d6494b0e279a13c32c80c28abfa3.jpeg"],
    ["name" => "Book", "price" => "$20", "image" => "https://s26162.pcdn.co/wp-content/uploads/sites/2/2022/08/Books.jpg"],
    ["name" => "T-Shirt", "price" => "$15", "image" => "https://teetall.pk/cdn/shop/files/Screenshot-2024-06-01-16-16-42-055_com.android.chrome-edit.jpg?v=1717285737"],
    ["name" => "Plant", "price" => "$25", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGrs3k0stcZCm1r01diPV70u1LJh40ObwvfQ&s"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; color: #333; }
        header { background: linear-gradient(135deg, #1f3c88, #152f5f); color: white; padding: 20px 0; text-align: center; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); }
        nav ul { list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; }
        nav ul li { display: inline-block; }
        nav a { color: white; text-decoration: none; font-weight: 600; transition: color 0.3s ease; }
        nav a:hover { color: #ffd700; }
        .hero { background: linear-gradient(135deg, #007bff, #0056b3); color: white; padding: 60px 20px; text-align: center; }
        .hero h1 { font-size: 2.8rem; margin-bottom: 15px; letter-spacing: 1px; }
        .hero p { max-width: 700px; margin: 0 auto; font-size: 1.1rem; line-height: 1.8; }
        .section { max-width: 1200px; margin: 20px auto; padding: 30px; background-color: white; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); }
        .section h2 { margin-top: 0; color: #1f3c88; border-bottom: 3px solid #007bff; padding-bottom: 10px; }
        .categories { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
        .category { text-align: center; padding: 20px; flex: 1 1 180px; background: #f9f9f9; border-radius: 12px; box-shadow: 0 6px 18px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .category:hover { transform: translateY(-5px); box-shadow: 0 10px 22px rgba(0,0,0,0.1); }
        .products { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; }
        .product { display: flex; flex-direction: column; justify-content: space-between; border-radius: 12px; background: #fff; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .product:hover { transform: translateY(-5px); box-shadow: 0 12px 24px rgba(0,0,0,0.12); }
        .product img { width: 100%; height: 220px; object-fit: cover; display: block; }
        .product h3 { margin: 15px 0 10px; font-size: 1.2rem; color: #333; }
        .product p { margin: 0 0 15px; color: #007bff; font-weight: 700; }
        .newsletter { text-align: center; }
        .newsletter p { margin-bottom: 20px; font-size: 1rem; color: #555; }
        .newsletter form { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; }
        .newsletter input[type="email"] { flex: 1 1 260px; padding: 12px 15px; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem; }
        .newsletter button { padding: 12px 25px; border: none; background: #007bff; color: white; border-radius: 8px; cursor: pointer; font-size: 1rem; transition: background 0.3s ease, transform 0.3s ease; }
        .newsletter button:hover { background: #0056b3; transform: translateY(-2px); }
        footer { background-color: #152f5f; color: white; text-align: center; padding: 25px 20px; margin-top: 20px; }
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .section { padding: 20px; }
            nav ul { gap: 10px; }
            .category { flex: 1 1 100%; }
            .products { grid-template-columns: 1fr; }
            .newsletter form { flex-direction: column; }
            .newsletter input[type="email"] { width: 100%; }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero">
        <h1><?php echo $heading; ?></h1>
        <p><?php echo $welcome_text; ?></p>
    </section>
    <section class="section">
        <h2>Categories</h2>
        <div class="categories">
            <?php foreach ($categories as $category): ?>
                <div class="category">
                    <h3><?php echo $category; ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="section">
        <h2>Featured Products</h2>
        <div class="products">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h3><?php echo $product['name']; ?></h3>
                    <p><?php echo $product['price']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="section newsletter">
        <h2>Newsletter</h2>
        <p>Subscribe to our newsletter for updates.</p>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
        </form>
    </section>
    <footer>
        <p>&copy; <?php echo $year; ?> <?php echo $author; ?>. All rights reserved.</p>
    </footer>
</body>
</html>