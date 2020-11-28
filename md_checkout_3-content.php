<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="md_checkout_3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="order_checking">
                    <h3 class="checkout_heading">YOUR ORDER</h3>
                    <table class="table_checkout_content">
                        <tr>
                            <th width="70%"><strong>Product</strong></th>
                            <th width="30%"><strong>Subtotal</strong></th>
                        </tr>
                        <tbody>
                        <tr class="order_items">
                            <td class="product_name">
                            Fishing Floating Net 
                            <strong>&times; 1</strong>
                            </td>
                            <td class="product_subtotal">
                                <div class="currency_symbol">&pound;</div>
                                75.00
                            </td>
                        </tr>
                        <tr class="_subtotal">
                            <td><strong>Subtotal</strong></td>
                            <td class="cart_subtotal">
                            <div class="currency_symbol">&pound;</div>
                                75.00
                            </td>
                        </tr>
                        <tr class="_total">
                            <td><strong>Total</strong></td>
                            <td class="cart_total">
                            <div class="currency_symbol">&pound;</div>
                                75.00
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="payment">
                        <ul>
                            <li class="checkout_notice" style="display:none">
                                Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.
                            </li>
                        </ul>
                        <div class="proceed_to_checkout ml-auto">
                            <button class="btn-default">
                                place order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            slider_bar</div>
        </div>
    </div>
</section>