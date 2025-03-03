<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_title ?? 'Untitled' ?></title>
    
    <link rel="shortcut icon" href="<?= BASE_URL ?>/image/favicon.png">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>js/app.js"></script>
</head>
<body>
    <header>
        <p>Header</p>
    </header>

    <nav>
        <a href="/">Navbar</a>

    <main>
        <h1><?= $_title ?? 'Untitled' ?></h1>