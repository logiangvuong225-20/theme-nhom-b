<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="md_checkout_6">
    <div class="row">
        <div class="col-md-4">
            <hr>
            <h4>archives</h4>
            <ul>
                    <li>
                        <a href="#">AUGUST 2016</a>
                    </li>
                    <li>
                        <a href="#">JULY 2016</a>
                    </li>
                </ul>
        </div>
    </div>
</section>