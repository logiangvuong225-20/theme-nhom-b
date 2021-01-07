<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="h-module-9">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product-box">
                    <img src="images/9-1.jpg" alt="#" class="img-fluid">
                    
                    <div class="overplay"><a class="text-center">+</a></div>
                </div>
                <div class="content-product text-center">
                <h5 class="no-transform"><a href="#">Boats</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>   
                    <p class="price">
                    £350.00 £300.00
                    </p>
                    <a rel="nofollow" href="#" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                </div>

            </div>
            <div class="col-md-4">
                <div class="product-box">
                    <img src="images/9-2.jpg" alt="#" class="img-fluid">
                    <div class="overplay"><a class="text-center">+</a></div>
                </div>
                <div class="content-product text-center">
                <h5 class="no-transform"><a href="#">Fishing Blinker hook</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>   
                    <p class="price">
                    £350.00 £300.00
                    </p>
                    <a rel="nofollow" href="#" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box">
                    <img src="images/9-3.jpg" alt="#" class="img-fluid">
                    <div class="overplay"><a class="text-center">+</a></div>
                </div>
                <div class="content-product text-center">
                <h5 class="no-transform"><a href="#">Fishing Floating Net</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>   
                    <p class="price">
                    £350.00 £300.00
                    </p>
                    <a rel="nofollow" href="#" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</section>