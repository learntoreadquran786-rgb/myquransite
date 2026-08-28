<?php

$book = $_GET['book'] ?? 'quran';

$title = "Reader";

$image = "";

switch($book){

    case "quran":
        $title = "Coloured Quran";
        $image = "coloured_quran/01/Page0001.gif";
        break;

    case "qaida":
        $title = "Noorani Qaida";
        $image = "noorani_qaida/01.jpg";
        break;

    case "pdf":
    $title = "Quran PDF";
    break;

    default:
        $title = "Reader";
        case "fiqh":
    $title = "Fiqh";
    $image = "books/fiqh/01.jpg";
    break;

case "tajweed":
    $title = "Tajweed";
    $image = "books/tajweed/01.jpg";
    break;

case "grammar":
    $title = "Arabic Grammar";
    $image = "books/grammar/01.jpg";
    break;
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $title; ?></title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/quran-reader.css">

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

<li><a href="#" class="active"><?php echo $title; ?></a></li>

</ul>

</nav>

</div>

</header>

<main class="reader">
    <h2 class="reader-title">
    <?php echo $title; ?>
</h2>

<div class="reader-box">

<?php if($book=="pdf"){ ?>

<iframe
    id="pdfViewer"
    src="quran_pdf/1.pdf"
    width="100%"
    height="800">
</iframe>

<?php }else{ ?>

<img
    id="bookImage"
    src="<?php echo $image; ?>"
    alt="<?php echo $title; ?>">

<?php } ?>

</div>

<div class="reader-options">

<?php if($book=="quran" || $book=="pdf"){ ?>

<select id="juzSelect">

<?php for($i=1;$i<=30;$i++){ ?>

<option value="<?php echo $i; ?>">

Juz <?php echo $i; ?>

</option>

<?php } ?>

</select>

<?php } ?>

</div>

<div class="reader-controls">

    <button id="prevBtn">◀ Previous</button>

    <span id="pageNumber">Page 1</span>

    <button id="nextBtn">Next ▶</button>

</div>

</main>

<footer class="footer">

<div class="footer-bottom">

© <?php echo date("Y"); ?> My Quran Majeed

</div>

</footer>

<script>

const book = "<?php echo $book; ?>";

</script>

<script src="js/reader.js"></script>

</body>

</html>