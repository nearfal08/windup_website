<p class="px-5 pb-3 lead grey-text text-center">Stay up to date with the latest Wind-Up Studio news.</p>
<?php
if (!isset($page) || empty($page)) {
    $page = null;
}
$count = 0;
foreach ($news as $n) { 
    if (($page == 'home' && $n['is_front']) || $page != 'home') {
        if ($count == 0) {
            echo '<div class="row">';
        }
?>
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="<?= $n['image'] ?>" alt="<?= $n['image_alt'] ?>">
            <div class="card-body">
                <h3 class="card-title"><?= $n['title'] ?></h3>
                <p class="card-text"><small><?= $n['date'] ?></small></p>
                <p class="card-text"><?= $n['snippet'] ?></p>
                <a href="#" class="btn btn-link">Read more →</a>
            </div>
        </div>
    </div>
<?php
        $count++;
        if ($count == 3) {
            echo '</div>';
            $count = 0;
        }
    }
}
?>  