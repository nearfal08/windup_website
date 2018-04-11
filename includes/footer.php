
<!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-4">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Wind-Up<br/>Studio</h5>
                <p>LOGO</p>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Wind-Up<br/>Pages</h5>
                <ul class="list-unstyled">
                    <li>
                        <a class="footer-link" href="<?= $config['links']['games'] ?>">Games</a>
                    </li>
                    <li>
                        <a class="footer-link" href="<?= $config['links']['news'] ?>">News</a>
                    </li>
                    <li>
                        <a class="footer-link" href="<?= $config['links']['about'] ?>">About</a>
                    </li>
                    <li>
                        <a class="footer-link" href="<?= $config['links']['contact'] ?>">Contact</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Wind-Up<br/>Games</h5>
                <ul class="list-unstyled">
                   <?php
                    foreach ($games as $g) {   
                    ?> 
                    <li>
                        <a class="footer-link" href="<?= $g['page_link'] ?>"><?= $g['title'] ?></a>
                    </li>
                   <?php
                    }
                    ?>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Fourth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Wind-Up<br/>News</h5>
                <ul class="list-unstyled">
                   <?php
                    foreach ($news as $n) {   
                    ?> 
                    <li>
                        <a class="footer-link" href="<?= $n['page_link'] ?>"><?= $n['title'] ?></a>
                    </li>
                   <?php
                    }
                    ?>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links--> 

    <hr>

    <!--Social buttons-->
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a href="https://facebook.com" target="_blank" class="btn-floating btn-sm btn-fb mx-1">
                    <i class="fa fa-facebook fa-2x"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://twitter.com" target="_blank"  class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fa fa-twitter fa-2x"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://youtube.com" target="_blank"  class="btn-floating btn-sm btn-youtube mx-1">
                    <i class="fa fa-youtube fa-2x"> </i>
                </a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://wcwalk.com"> Wcwalk.com </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
                      