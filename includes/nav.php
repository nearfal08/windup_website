<?php
    if (!isset($page) || empty($page)) {
        $page = null;
    }
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light nav-wind-up">
    <div class="container">
        <a class="navbar-brand nav-link center-text" href=""><img class="blinking-cursor" width="100" src="images/logo_test.png" />
        <br/><span style="color: #4484F4; font-size: 16px;">Large</span> <span style="color: #4484F4; font-size: 16px;">Mouth</span> <span style="color: #4484F4; font-size: 16px;">Studio</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= $page == 'home' ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= $config['links']['home'] ?>">Home</a>
                </li>
                <li class="nav-item <?= $page == 'games' ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= $config['links']['games'] ?>">Games</a>
                </li>
                <li class="nav-item <?= $page == 'news' ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= $config['links']['news'] ?>">News</a>
                </li>
                <li class="nav-item <?= $page == 'about' ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= $config['links']['about'] ?>">About</a>
                </li>
                <li class="nav-item <?= $page == 'contact' ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= $config['links']['contact'] ?>">Contact</a>
                </li>
            </ul>
            <span class="navbar-text">
<!--
              <a href="facebook.com"><i class="fa fa-facebook fa-2x" style="margin: 0 19px;"></i></a>
              <a href="twitter.com"><i class="fa fa-twitter fa-2x" style="margin: 0 19px 0 0;"></i></a>
              <a href="youtube.com"><i class="fa fa-youtube fa-2x"></i></a>
-->
                <a href="https://facebook.com" target="_blank" class="btn-floating btn-sm btn-fb" style="margin: 0 10px;">
                    <i class="fa fa-facebook fa-2x"> </i>
                </a>
                <a href="https://twitter.com" target="_blank" class="btn-floating btn-sm btn-tw" style="margin: 0 10px;">
                    <i class="fa fa-twitter fa-2x"> </i>
                </a>
                <a href="https://youtube.com" target="_blank" class="btn-floating btn-sm btn-youtube">
                    <i class="fa fa-youtube fa-2x"> </i>
                </a>
            </span>
        </div>
    </div>
</nav>