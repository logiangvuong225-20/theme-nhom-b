<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="nav-header">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="#"><img
                    src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/09/Logo12.png" alt="logo" /></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MENBERSHIP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EVENT</a>
                    </li>
                    <li class="nav-item gallery-menu">
                        <a class="nav-link" href="#">GALLERY</a>
                        <ul class="submenu-sb">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="title">
                                        <a href="#"> Gallery 3 Columns</a>
                                    </p>
                                    <p class="title">
                                        <a href="#"> Gallery 3 Columns</a>
                                    </p>
                                    <p class="title">
                                        <a href="#"> Gallery 3 Columns</a>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="title">
                                        <a href="#"> Gallery 3 Columns</a>
                                    </p>
                                    <p class="title">
                                        <a href="#"> Gallery 3 Columns</a>
                                    </p>
                                </div>
                            </div>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SHOP</a>
                    </li>
                    <li class="nav-item blog-menu">
                        <a class="nav-link" href="#">BLOG</a>
                        <ul class="submenu-sb ">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="title">
                                        <a href="#"> BLOG CENTER</a>
                                    </p>
                                    <p class="title">
                                        <a href="#"> BLOCK CENTER RIGHT </a>
                                    </p>
                                    <p class="title">
                                        <a href="#"> BLOCK CENTER RIGHT</a>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="title">
                                        <a href="#"> BLOCK CENTER RIGHT</a>
                                    </p>
                                    <p class="title">
                                        <a href="#"> BLOCK CENTER RIGHT</a>
                                    </p>
                                    <p class="title">
                                        <a href="#"> BLOCK CENTER RIGHT</a>
                                    </p>
                                </div>
                            </div>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>

                    <li class="nav-item menucart ">
                        <a class="nav-link" href="#">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                        <ul class="submenu ">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-cart-hv"
                                        src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/boats-1199112_960_720-1-150x150.jpg"
                                        alt="#">
                                </div>
                                <div class="col-md-8">
                                    <div class="name-pr">Boast</div>
                                    <div class="toal">
                                        <span class="total">1 x</span>
                                        <span class="price">500k</span>

                                    </div>
                                </div>
                            </div>

                            <div class="sp2">
                                <a class="btn-view-cart" href="#">VIEW CART</a> <span class="price-cart">500k</span>
                            </div>
                        </ul>
                    </li>

                    <li class="nav-item menu-search">
                        <a class="nav-link" href="#">
                            <i class="fa fa-search" onclick="myFunction()"></i>
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
        <div id="search">
            <input type="text" name="search" id="ipsearch" placeholder="Search for somthing">

            <i class="fa fa-times" aria-hidden="true" onclick="Close()"></i>



        </div>
    </div>
</div>

<script>
function myFunction() {
    document.getElementById("search").style.display = "block";
}

function Close() {
    document.getElementById("search").style.display = "none";
}
</script>