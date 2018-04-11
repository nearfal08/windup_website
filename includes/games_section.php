<p class="px-5 pb-3 lead grey-text text-center">Wind-Up studio builds video games across multiple platforms. Check them out!</p>
<?php
if (!isset($page) || empty($page)) {
    $page = null;
}
$count = 0;
foreach ($games as $g) {  
    if (($page == 'home' && $g['is_front']) || $page != 'home') {
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card game">
                <img class="card-img-top card-border" src="<?= $g['image'] ?>" alt="<?= $g['image_alt'] ?>">
                <a class="btn btn-primary game-play game-btn" href="<?= $g['page_link'] ?>">Learn More</a> 
                <div class="card-body game-info"> 
                    <h2 class="text-hide"><?= $g['title'] ?></h2>
                    <p class="card-text"><?= $g['snippet'] ?></p>  
                    <div class="center-text">
                        <a href="#" target="_blank"><img class="ml-1 mr-1 mb-3" src="images/ios_store.png" alt="Get on IOS"></a>
                        <a href="#" target="_blank"><img class="ml-1 mr-1 mb-3" src="images/play_store.png" alt="Get on Android"></a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php 
    }
}
?>  