<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="h-module-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="box-mdl-1">
                    <div class="title-box-mdl-4">
                        <h3><b>Fishing</b></h3>
                    </div>
                    <hr>
                    <div class="sub-title-mdl-4">
                        <h4 class="white">QUALITY FLY FISHING</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-mdl-2">
                    <div class="title-box-mdl-4">
                        <h3><b>PREPARE TO BE FOR</b></h3>
                    </div>
                    <hr>
                    <div class="sub-title-mdl-4">
                        <h4 class="white">Fishing Tour</h4>
                    </div>
                </div>
                <div class="box-mdl-3">
                <div class="title-box-mdl-4">
                    <h3><b>Adventure Trip</b></h3>
                </div>
                <hr>
                <div class="sub-title-mdl-4">
                    <h4 class="white">Our Great Skilled Workers</h4>
                    <p>WE ARE HAPPY TO MAKE YOU HAPPIER</p>
                </div>
            </div>
            </div>
           
        

        <div class="col-md-3  text-center">
            <div class="box-mdl-4">
                <div class="title-box-mdl-4">
                    <h3><b>Tools</b></h3>
                </div>
                <hr>
                <div class="sub-title-mdl-4">
                    <h4 class="white">FISHING EQUIPMENTS</h4>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>