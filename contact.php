<?php
include 'data.php';
$page = 'contact';
$news = getNews();
$games = getGames();
$title = 'Contact - Wind-Up Studio';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    include 'includes/css.php';
    ?>
    <title><?= $title ?></title>
</head>

<body>
    <?php
    include 'includes/nav.php';
    ?>
    <div class="main-wrapper"> 
    <?php 
    ?>  
    </div> 
    <div class="page-banner">
        <h1>Contact Us</h1>
    </div>
    <div class="container">
        <div class="section-wrapper"> 
            <?php
            include 'includes/contact_form.php';
            ?>
        </div>
    </div>
    <div class="footer-banner"> 
    </div>
    <?php
    include 'includes/footer.php';
    ?> 

    <?php
    include 'includes/js.php';
    ?>
</body>

</html>
