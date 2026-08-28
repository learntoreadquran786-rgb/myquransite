<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Islamic Books</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">

<style>

.books{

    margin-top:110px;
    padding:40px 20px;
    min-height:70vh;

}

.books h2{

    text-align:center;
    color:#0B5D3B;
    margin-bottom:40px;

}

.book-grid{

    max-width:1000px;
    margin:auto;

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));

    gap:25px;

}

.book-card{

    background:#ffffff;

    padding:30px;

    border-radius:12px;

    text-align:center;

    box-shadow:0 5px 15px rgba(0,0,0,.10);

}

.book-card h3{

    color:#0B5D3B;

    margin-bottom:15px;

}

.book-card a{

    display:inline-block;

    background:#0B5D3B;

    color:#fff;

    padding:10px 20px;

    border-radius:6px;

}

</style>

</head>

<body>

<header class="header">

<div class="container">

<div class="logo">

<h1>🕌 My Quran Majeed</h1>

</div>

<nav class="navbar">

<ul class="nav-links">

<li><a href="index.php">Home</a></li>

<li><a href="books.php" class="active">Books</a></li>

</ul>

</nav>

</div>

</header>

<section class="books">

<h2>Islamic Books</h2>

<div class="book-grid">

<div class="book-card">

<h3>📘 Fiqh</h3>

<a href="#">Coming Soon</a>

</div>

<div class="book-card">

<h3>📗 Tajweed</h3>

<a href="#">Coming Soon</a>

</div>

<div class="book-card">

<h3>📙 Hadith</h3>

<a href="#">Coming Soon</a>

</div>

<div class="book-card">

<h3>📕 Tafseer</h3>

<a href="#">Coming Soon</a>

</div>

</div>

</section>

<footer class="footer">

<div class="footer-bottom">

© <?php echo date("Y"); ?> My Quran Majeed

</div>

</footer>

</body>

</html>