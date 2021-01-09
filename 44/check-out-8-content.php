<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div id="h-module-check-out-8">
   <hr>
   <h4>META</h4>
   <ul>
      <li> <a href="#"></a> LOG IN</li>
      <li><a href="#"></a>ENTRIES FEED</li>
      <li><a href="#"></a>COMMENTS FEED</li>
      <li><a href="#"></a>WORDPRESS.ORG</li>
   </ul>
</div>