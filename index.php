<?php
include 'data.php';
$page = 'home';
$news = getNews();
$games = getGames();
$slides = getSlides(); 
$title = 'Wind-Up Studio';
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
    include 'includes/slideshow.php';
    ?>  
    </div>
    <div class="page-banner">
        <h1>Wind-Up News</h1>
    </div>
    <div class="container">
        <div class="section-wrapper">
            <?php
            include 'includes/news_section.php';
            ?> 
            <div class="row">
                <div class="col-sm center-text">
                   <br/>
                   <br/>
                    <a href="<?= $config['links']['news'] ?>" class="btn btn-primary news-btn">View all news</a>
                </div> 
            </div> 
        </div>
    </div>
    <div class="page-banner">
        <h1>Wind-Up Games</h1>
    </div>
    <div class="container">
        <div class="section-wrapper"> 
            <?php
            include 'includes/games_section.php';
            ?>
            <div class="row">
                <div class="col-sm center-text">
                   <br/>
                   <br/>
                    <a href="<?= $config['links']['games'] ?>" class="btn btn-primary news-btn">View all games</a>
                </div> 
            </div> 
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
