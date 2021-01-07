<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="h-module-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>
                EVERYTHING FISHING AND BOATING
                </h2>
                <h3>relaxing and easy</h3>
                <a href="#" class="btn btn-accent">view <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>