<?php
   $url_host = $_SERVER['HTTP_HOST'];
   
   $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
   
   $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
   
   preg_match_all($pattern_uri, __DIR__, $matches);
   
   $url_path = $url_host . $matches[1][0];
   
   $url_path = str_replace('\\', '/', $url_path);
   ?>
<div id="h-module-sidebar-3">
<hr>
   <h4>Latest Blogs</h4>
   <ul>
   <li><a href="#">HELLO WORLD</a> </li>
   <li><a href="#">4 FUN WAYS TO ENJOY BOATING</a> </li>
   <li><a href="#">fishing and boating spots</a> </li>
   </ul>
</div>