<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="module-detail-1">
    <div class="card-s6">
        <div class="content">
            <div class="hr"></div>
            <h5 class="title-cart-prd">
                FISHING NET

            </h5>

            <div class="card-product">
                <div class="box-img">
                    <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/boats-1199112_960_720-1.jpg"
                        alt="">
                    <div class="shadow-img">
                        <i class="fa fa-plus" aria-hidden="true" data-toggle="modal" data-target="#myModal">
                        </i>

                    </div>
                </div>
                <a class="product-title" href="#">
                    <h6>Boats</h6>
                </a>

                <div class="product-price">
                    <span class="price-old"> 7000.000</span>
                    <span class="price-new">500.000</span>
                </div>

                <p class="product-des"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                    dignissimos sapiente nemo.</p>

                <input type="number" name="number" id="number" value="1"> <button class="addcart"> <i
                        class="fa fa-shopping-cart" aria-hidden="true"></i>
                    ADD TO CART</button>
            </div>

        </div>
    </div>
    <!-- Modal -->

    <div class="modal fade modal-center" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-vp">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <button class="zoom"> <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                </button>
                <div class="box-img">
                    <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/boats-1199112_960_720-1.jpg"
                        alt="">

                </div>

            </div>
        </div>
    </div>

</div>