<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="h-module-10">
    <div class="container">
        <div class="row">
            <div class="col-md text-center">
                <h1>200</h1>
                <h5>FISHING SPOTS</h5>
            </div>
            <div class="col-md text-center">
            <h1>456</h1>
                <h5>HAPPY CUSTOMERS</h5>
            </div>
            <div class="col-md text-center">
            <h1>99</h1>
                <h5>COMPETITIONS WON</h5>
            </div>
            <div class="col-md text-center">
            <h1>900</h1>
                <h5>ADVENTURE TRIP</h5>
            </div>
        </div>
    </div>
</section>