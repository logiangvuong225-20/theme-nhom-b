<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="h-module-e3">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="e3-box">
               <img src="images/e1.jpg" alt="#" class="img-fluid">
               <h4>Beach Fishing</h4>
               <p><strong>Date:</strong>  Every Friday Night!<br>
                  <strong>Time:</strong>   5:00 pm – 7:00 pm
               </p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="e3-box">
               <img src="images/e2.jpg" alt="#"  class="img-fluid">
               <h4>High fly Tournament</h4>
               <p><strong>Date:</strong>  Every Friday Night!<br>
                  <strong>Time:</strong>   5:00 pm – 7:00 pm
               </p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="e3-box">
               <img src="images/e3.jpg" alt="#"  class="img-fluid">
               <h4>Beach Fishing</h4>
               <p><strong>Date:</strong>  Billfish Tournament<br>
                  <strong>Time:</strong>   5:00 pm – 7:00 pm
               </p>
            </div>
         </div>
      </div>
   </div>
</section>