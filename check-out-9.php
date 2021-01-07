<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div id="h-module-check-out-9">
   <hr>
   <h4>About Us</h4>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
      We will create a unique and visually pleasing logo to reflect your overall brand to be used in all areas of your marketing.
   </p>
   <ul>
      <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
      <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
      <li><i class="fa fa-vimeo-square" aria-hidden="true"></i></li>
      <li><i class="fa fa-dribbble" aria-hidden="true"></i></li>
      <li><i class="fa fa-google-plus" aria-hidden="true"></i></li>

   </ul>
</div>