<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div id="h-module-s1">
<div class="container">
   <div class="sl-short">
      <div class="form-group form-1">
         <select class="form-control" id="exampleFormControlSelect1">
            <option selected="selected">Default sorting</option>
            <option>Sort by popularity</option>
            <option>Sort by average rating</option>
            <option>Sort by latest</option>
            <option>Sort by price: low to high</option>
            <option>Sort by price: high to low</option>
         </select>
      </div>
      <div class="form-group form-2">
         <select class="form-control" id="exampleFormControlSelect1">
            <option selected="selected">4 Items</option>
            <option>8 Items</option>
            <option>16 Items</option>
            <option>32 Items</option>
         </select>
      </div>
   </div>
</div>
</div>