<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="module_7">
    <div class="container">
        <hr>
        <h4>why choose us</h4>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="grid_items">
                    <div class="icon_and_header">
                        <div class="icon col-xs-2">
                            <span class="iconify" data-icon="clarity:flag-line" data-inline="false"></span>
                        </div>
                        <div class="header col-xs-10">
                            <div class="header_title">
                            FISHING COMPETITIONS
                            </div>
                            <div class="header_subtitle">
                            FISHING EVENTS
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="descriptions">
                    Aliquam erat volutpat. Aliquam fringilla vulputate dolor eu gravida Aliquam erat volutpat. Aliquam fringilla.
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="grid_items">
                    <div class="icon_and_header">
                        <div class="icon col-xs-2">
                            <span class="iconify" data-icon="et:circle-compass" data-inline="false"></span>
                        </div>
                        <div class="header col-xs-10">
                            <div class="header_title">
                            FISHING SPOTS
                            </div>
                            <div class="header_subtitle">
                            GREAT DESTINATIONS
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="descriptions">
                    Aliquam erat volutpat. Aliquam fringilla vulputate dolor eu gravida Aliquam erat volutpat. Aliquam fringilla.
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="grid_items">
                    <div class="icon_and_header">
                        <div class="icon col-xs-2">
                        <span class="iconify" data-icon="et:strategy" data-inline="false"></span>
                        </div>
                        <div class="header col-xs-10">
                            <div class="header_title">
                            TIPS & ADVICE
                            </div>
                            <div class="header_subtitle">
                            BY EXPERTS
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="descriptions">
                    Aliquam erat volutpat. Aliquam fringilla vulputate dolor eu gravida Aliquam erat volutpat. Aliquam fringilla.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>