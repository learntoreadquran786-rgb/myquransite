<?php
$pageTitle = "My Quran Majeed";
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $pageTitle; ?></title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/hero.css">
<link rel="stylesheet" href="css/buttons.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/responsive.css">

</head>

<body>

<header class="header">

    <div class="container">

        <div class="logo">
            <h1>🕌 My Quran Majeed</h1>
        </div>

        <nav class="navbar">

            <ul class="nav-links">

                <li><a href="index.php" class="active">Home</a></li>

                <li><a href="reader.php?book=quran">Quran</a></li>

                <li><a href="books.php">Books</a></li>

            </ul>

        </nav>

    </div>

</header>

<section class="hero">

    <div class="hero-overlay">

        <div class="hero-content">

            <h2>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h2>

            <h1>My Quran Majeed</h1>

            <p>
                Read the Holy Quran and Islamic Books Online.
            </p>

            <div class="hero-buttons">

               <a href="reader.php?book=quran" class="card">
    <img src="images/icons/quran.png" alt="Quran">
    <h3>Coloured Quran</h3>
    <span>Read the Holy Quran</span>
</a>

<a href="reader.php?book=pdf" class="card">
    <img src="images/icons/pdf.png" alt="PDF">
    <h3>Quran PDF</h3>
    <span>Open all 30 Juz</span>
</a>

<a href="reader.php?book=qaida" class="card">
    <img src="images/icons/qaida.png" alt="Qaida">
    <h3>Noorani Qaida</h3>
    <span>Learn Noorani Qaida</span>
</a>
            </div>

        </div>

    </div>

</section>

<footer class="footer">

    <div class="footer-bottom">
        © <?php echo date("Y"); ?> My Quran Majeed
    </div>

</footer>

<script src="js/script.js"></script>

</body>

</html>