<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="module_about_2">
    
            <div class="what_we_provide">
                <hr>
                <h4>what we provide</h4>
                <ul>
                    <li>
                        <a href="#">FISHING TOUR</a>
                    </li>
                    <li>
                        <a href="#">ADVENTURE TRIP</a>
                    </li>
                    <li>
                        <a href="#">FISHING COMPETITION</a>
                    </li>
                    <li>
                        <a href="#">FISHING EQUIPMENTS</a>
                    </li>
                    <li>
                        <a href="#">OUR EXPERTS GUIDENCE</a>
                    </li>
                </ul>
            </div>
        </div>
</section>