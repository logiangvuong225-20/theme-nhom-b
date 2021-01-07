<?php
   $url_host = $_SERVER['HTTP_HOST'];
   
   $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
   
   $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
   
   preg_match_all($pattern_uri, __DIR__, $matches);
   
   $url_path = $url_host . $matches[1][0];
   
   $url_path = str_replace('\\', '/', $url_path);
   ?>
<div id="h-module-sidebar-4">
<div id="twitter_feed-1" class="row no-margin widget widget_twitter_feed"><hr><h4>Twitter Feed</h4><div class="row no-margin twitter-feed"><i class="fa fa-twitter icon accent"></i>
					<div class="content"> <p class="white">Check out 'Video Gallery Pro jQuery Addon for Visual Composer' on #EnvatoMarket by @themeofwp #codecanyon https://t.co/k5JZiSokp0</p>
                    <p>3 years Ago</p>
                  </div>
                </div><div class="row no-margin twitter-feed"><i class="fa fa-twitter icon accent"></i>
					<div class="content"> <p class="white">Vneck Tshirt  asd asdhttp://hsoft.in/developer14/spinty/product/vneck-tee/</p>
                    <p>3 years Ago</p>
                  </div>
                </div></div>
</div>