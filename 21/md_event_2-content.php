<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="module_event_2">
        <hr>
        <h4>popular events</h4>
            <div class="row">
                <div class="col-sm-4">
                    <div class="events">
                        <img width="360px" height="250px" src="./images/barmouth-843621_1920-1.jpg" alt="#">
                        <h4 class="event-name">Billfish Tournament</h4>
                        <div class="event-detail">
                            <strong>Date:</strong>
                            Every Friday Night!
                        </div>
                        <div class="event-detail">
                            <strong>Time:</strong>
                            5:00 pm – 7:00 pm
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="events">
                        <img width="360px" height="250px" src="./images/fishing-1227449_1920-1.jpg" alt="#">
                        <h4 class="event-name">High fly Tournament</h4>
                        <div class="event-detail">
                            <strong>Date:</strong>
                            Every Sunday Night!
                        </div>
                        <div class="event-detail">
                            <strong>Time:</strong>
                            5:00 pm – 7:00 pm
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="events">
                        <img width="360px" height="250px" src="./images/hiddensee-1032318_1920-1.jpg" alt="#">
                        <h4 class="event-name">Big Splash Tournament</h4>
                        <div class="event-detail">
                            <strong>Date:</strong>
                            Every sunday!
                        </div>
                        <div class="event-detail">
                            <strong>Time:</strong>
                            3:00 pm – 5:00 pm
                        </div>
                    </div>
                </div>
    </div>
</section>