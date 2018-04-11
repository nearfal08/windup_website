<?php
include 'data.php';
$page = 'games';
$news = getNews();
$games = getGames();
$currentGame = $games['ball_shooter'];
$title = 'Ball Shooter - Wind-Up Studio';
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
        <img class="d-block img-center" src="<?= $currentGame['banner_image'] ?>" alt="<?= $currentGame['image_alt'] ?>">
    </div>  
    <div class="page-banner">
        <h1>Wind-Up Game: Ball Shooter</h1>
    </div>
    <div class="container">
        <div class="section-wrapper"> 
            <div class="row mt-3">
                <div class="col-lg-8">
                    <img class="float-left mr-3" src="<?= $currentGame['app_image'] ?>" alt="<?= $currentGame['image_alt'] ?>">
                    <h2 class="float-left"><?= $currentGame['title'] ?></h2>
                    <br/>  
                    <br/>  
                    <p class="lead grey-text">Slice fruit, don’t slice bombs – that’s all you need to know to get started with the addictive Fruit Ninja® action! No matter how you like to play, the free version of the game is packed with features to satisfy your fruit-destroying appetite.</p> 
                    <p class="lead grey-text">Challenge yourself and see how long you can last in Classic mode, set a high score in Arcade mode or simply practise your fruit-slicing skills in Zen mode. A wide range of blades and dojos are at your disposal to help you cut your way to the top. Want more fun? Take a break and experience a new way to slice your favourite fruit with minigames, or test your mastery of the game and win prizes in the daily Challenge event. Go head-to-head and show off your skills as the ultimate ninja against your friends with leaderboards and local multiplayer.</p> 
                    <p class="lead grey-text">Up for a real challenge? Play Event mode and do battle against other ninjas for the chance to win unique blades and dojos. That’s not all though – give yourself the edge by logging in every day and be rewarded with daily prizes, including rare blades and dojos that you can use in other game modes!</p> 
                </div>
                <div class="col-lg-4">
                    <h2 class="center-text">Available On</h2>
                    <div class="center-text">
                        <a href="#" target="_blank"><img class="ml-1 mr-1 mb-3" src="images/ios_store.png" alt="Get on IOS"></a>
                        <a href="#" target="_blank"><img class="ml-1 mr-1 mb-3" src="images/play_store.png" alt="Get on Android"></a>
                    </div>
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
