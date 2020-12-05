<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-g1">

    <!-- partial:index.partial.html -->
    <div class="button-group filters-button-group">
        <button class="button is-checked" data-filter="*">All</button>
        <button class="button" data-filter=".beach">Albanian roach</button>
        <button class="button" data-filter=".bird">Algae eater</button>
        <button class="button" data-filter=".boat">Armoured catfish</button>
        <button class="button" data-filter=".lighthouse">Asian carp</button>
        <button class="button" data-filter=".people">Billfish</button>
        <!-- <button class="button" data-filter=".rock">rock</button>
        <button class="button" data-filter=".sea">sea</button> -->
    </div>

    <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">




        <article class="sea boat lighthouse people">
            <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/port2-1.jpg"
                class="img-responsive" />
            <div class="overlay">
                <div class="over-h">
                    <h6>NETTING</h6>
                    <hr>
                    <a href="#"> VIEW PROJECT</a>
                </div>
            </div>
        </article>
        <article class="bird boat lighthouse">
            <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/port3-1.jpg"
                class="img-responsive" />
            <div class="overlay">
                <div class="over-h">
                    <h6>NETTING</h6>
                    <hr>
                    <a href="#"> VIEW PROJECT</a>
                </div>
            </div>
        </article>
        <article class="bird boat lighthouse">
            <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/port4-1.jpg"
                class="img-responsive" />
            <div class="overlay">
                <div class="over-h">
                    <h6>NETTING</h6>
                    <hr>
                    <a href="#"> VIEW PROJECT</a>
                </div>
            </div>
        </article>

        <article class="beach boat sea people">
            <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/port5-1.jpg"
                class="img-responsive" />
            <div class="overlay">
                <div class="over-h">
                    <h6>NETTING</h6>
                    <hr>
                    <a href="#"> VIEW PROJECT</a>
                </div>
            </div>
        </article>
        <article class="beach people rock sea">
            <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/port6-1.jpg"
                class="img-responsive" />
            <div class="overlay">
                <div class="over-h">
                    <h6>NETTING</h6>
                    <hr>
                    <a href="#"> VIEW PROJECT</a>
                </div>
            </div>

        </article>
        <article class="beach bird people">
            <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/port7-1.jpg"
                class="img-responsive" />
            <div class="overlay">
                <div class="over-h">
                    <h6>NETTING</h6>
                    <hr>
                    <a href="#"> VIEW PROJECT</a>
                </div>
            </div>
        </article>
        <article class="beach boat lighthouse bird">
            <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/port1-1.jpg"
                class="img-responsive" />
            <div class="overlay">
                <div class="over-h">
                    <h6>NETTING</h6>
                    <hr>
                    <a href="#"> VIEW PROJECT</a>
                </div>
            </div>
        </article>
        <article class="beach boat lighthouse">
            <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/port8-1.jpg"
                class="img-responsive" />
            <div class="overlay">
                <div class="over-h">
                    <h6>NETTING</h6>
                    <hr>
                    <a href="#"> VIEW PROJECT</a>
                </div>
            </div>
        </article>

    </section>

</div>