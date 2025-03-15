<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_title ?? 'Untitled' ?></title>
    <link rel="icon" href="/image/favicon.ico"> <!--TODO: FIX FAVICON NOT DISPLAY -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>js/app.js"></script>
</head>
<body>
    <header>
        </div>
        <h1><a href="/">Epal Aifon</a></h1>
        <nav class="nav-links">
            <a href="<?= BASE_URL ?>index.php">Home</a>
            <a href="<?= BASE_URL ?>products.php">Our Product</a>
            <a href="<?= BASE_URL ?>about.php">About</a>
            <a href="<?= BASE_URL ?>contact.php">Contact</a>
        </nav>
        <div class="search-bar">
            <form action="<?= BASE_URL ?>search.php" method="GET">
                <input type="text" name="query" placeholder="Search products..." required>
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="member-auth-buttons">
            <a href="<?= BASE_URL ?>page/products/cart.php" class="btn cart-btn">🛒 Cart</a>
            <a href="<?= BASE_URL ?>page/member/login.php" class="btn">👤Login</a>
        </div>
    </header>

    <nav>
        <a href="/">Navbar</a>

    <main>
        <h1><?= $_title ?? 'Untitled' ?></h1>