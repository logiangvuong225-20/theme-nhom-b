<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-s2">
    <div class="content">
        <div class="search">
            <div class="hr"> </div>
            <h5>SEARCH</h5>
            <div class="search-ip">
                <input class="ip-search" placeholder="search for products" type="text"><i class="fa fa-search"
                    aria-hidden="true"></i>
            </div>
        </div>

        <div class="cart">

            <div class="hr"> </div>
            <div class="form-cart">
                <h5>CART</h5>
                <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/fishing-net-557249_960_720-1.jpg"
                    alt="luoi cau ">
                <span class="name-product"> Fishing Floating Net </span>
                <div class="pr-prd">
                    <span class="amount">1 x</span>
                    <span class="price-product">700.000</span>
                </div>

            </div>
        </div>
    </div>
</div>