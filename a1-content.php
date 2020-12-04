<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-a1">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="content-tx">
                        <div class="border-h"></div>
                        <h5>MAKE YOUR FISHING EXPERIENCE THE BEST!</h5>
                        <p class="tx-1">Our fishing equipment and technology show in Aalborg, which is expected to
                            attract some 15,000 visitors this year. Exhibitors from more than 25 countries are thought
                            to be filling the space of the Aalborg Kongres & Kultur Center, which in 2015 is expanding
                            over the 9,000 square meters it reached last year thanks to a mobile extension to the
                            center.</p>
                        <p class="tx-2">“WE LIKE FISHING IT IS ALWAYS AWAY OF RELAXING.”</p>
                        <div class="sign">
                            <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/sign-1.png" alt="">
                            <h5 class="muted">CEO / COFOUNDER</h5>
                        </div>

                    </div>

                </div>
                <div class="col-md-4 col-12"></div>
            </div>
        </div>
    </div>
</div>