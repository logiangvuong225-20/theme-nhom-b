<?php
   $url_host = $_SERVER['HTTP_HOST'];
   
   $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
   
   $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
   
   preg_match_all($pattern_uri, __DIR__, $matches);
   
   $url_path = $url_host . $matches[1][0];
   
   $url_path = str_replace('\\', '/', $url_path);
   ?>
<div id="h-module-detail-2">
   <div class="row">
      <div class="col-md-12">
         <div class="tabs-container">
            <div class="tab-nav tabs wc-tabs">
               <a href="#tab-description" class="active">Description</a>				
               <a href="#tab-reviews">Reviews (0)</a>				
            </div>
            <div class="tab-holder">
               <div class="tab" id="tab-description" style="display: block;">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>