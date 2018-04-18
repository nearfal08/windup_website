<?php
include 'data.php';
$page = 'news';
$news = getNews();
$games = getGames();
$title = 'News - Wind-Up Studio';
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
    </div>
    <div class="page-banner">
        <h1>Large Mouth News</h1>
    </div>
    <div class="container">
        <div class="section-wrapper">
            <?php
            include 'includes/news_section.php';
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
