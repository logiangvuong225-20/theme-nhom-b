<?php
   $url_host = $_SERVER['HTTP_HOST'];
   
   $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
   
   $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
   
   preg_match_all($pattern_uri, __DIR__, $matches);
   
   $url_path = $url_host . $matches[1][0];
   
   $url_path = str_replace('\\', '/', $url_path);
   ?>
<div id="h-module-cart-2">
   <div class="cart_totals ">
      <h2>Cart totals</h2>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Subtotal</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">£</span>18.00</span></th>
      <th scope="row">£</span>18.00</span></th>
    </tr>
    
   
  </tbody>
</table>
      <div class="wc-proceed-to-checkout">
         <a href="http://kamleshyadav.com/wp/fishing/checkout/" class="checkout-button button alt wc-forward">
         Proceed to checkout</a>
      </div>
   </div>
</div>

