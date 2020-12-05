<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-search-1">
    <div class="content">
        <div class="content-search">
            <h2>SEARCH RESULTS FOR: A </h2>
            <hr>
            <p class="ct-sm">Sample Page </p>
            <p class="des">This is an example page. It’s different from a blog post because it will stay in one place
                and will show
                up in your site navigation (in most themes). Most people start with an About page that introduces them
                to potential site visitors. It might say something like this: Hi there! I’m a bike messenger […]
            </p>
            <button>READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </button>
        </div>
    </div>


</div>