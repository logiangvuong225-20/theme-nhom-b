<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="md_sliderbar_4">
    <hr>
    <h4>Twitter feed</h4>
    <div class="feeds">
        <i class="fab fa-twitter"></i>
        <p>
           Check out "Video Galery Pro jQuery Addon for Visual Composer" on #EnvatoMarket by @themeofwp #codecanyon http://t.co/k5JZiSokpo 
            <span>3 years ago</span>
        </p>
    </div>
    <div class="feeds">
        <i class="fab fa-twitter"></i>
        <p>
           Vneck Tshirt asd asdhttp://hsoft.in/developer14/spinty/product/vneck-tee/
            <span>3 years ago</span>
        </p>
    </div>
</section>