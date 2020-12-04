<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="md_detail_4">
    <hr>
    <h4>cart</h4>
    <div class="shoping-cart">
        <ul class="cart-list">
            <li class="cart-item">
                <a href="#" class="remove-cart"><i class="fas fa-times"></i></a>
                <img src="./images/blinker-medium.jpg" alt="#">
                <div class="product-detail">
                    <a href="#" class="cart-product-name">Fishing Blinker hook</a>
                    <div class="cart-product-quanlity">
                        <strong>1</strong>
                        <i class="fas fa-times"></i>
                        <span>£18.00</span>
                    </div>
                </div>
            </li>
        </ul>
        <div class="cart-sub-total">
            <strong>Subtotal:</strong> £18.00
        </div>
        <div class="mini-cart-submit">
            <button class="btn-default">View cart</button>
            <button class="btn-default">Checkout</button>
        </div>
    </div>
</section>