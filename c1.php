<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div id="h-module-c1">
   <div class="text-center">
      <hr>
      <h4>GET IN TOUCH WITH US!</h4>
      <p>
      Fill out all required fields to send a message. You have to login to your wordpress account to post any comment. Please don´t spam, thank you!
      </p>
   </div>

   
</div>