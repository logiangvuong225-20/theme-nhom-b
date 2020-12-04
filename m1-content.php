<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-m1">
    <div class="banner">
        <div class="content-bner">
            <h1>Join Us Today</h1>
            <a class="btn-read" href="#"> Read More <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>
    </div>
</div>