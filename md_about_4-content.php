<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section class="md_about_4">
    <div class="wp-slider-evolution">
        <!--Start plugin slider evolution -->
        <div id="carouselExampleFade" class="carousel carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active carousel-animation">
                    <img src="./images/about-image2.jpg" alt="#" style="width:100%;">
                    <!--Carousel banner words-->
                        <div class="carousel-text">
                            <hr id="hr-top" class="hrAnimation">
                            <h2 class="qoutes zoomIn">A bad day's fishing is better than a good day at work.</h2>
                            <hr id="hr-bottom" class="hrAnimation">
                            <div class="carousel-actions">
                                <button class="btn-carousel sliderRight">Know more</button>
                                <button class="btn-carousel-gold sliderLeft">Contact us</button>
                            </div>
                        </div>
                </div>
                
                <div class="carousel-item">
                    <img src="./images/about-image1.jpg" alt="#" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carouselExampleFade" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
                <span class="carousel-control-wrap" data-slide="next">
                    SLIDE
                </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouselExampleFade" data-slide="next">
                <i class="fas fa-chevron-right"></i>
                <span class="carousel-control-wrap" data-slide="next">
                    SLIDE
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <script>
        $('.carousel').carousel({
            interval: 10000
        })
    </script>
    <script>
    const BG_NEXT = document.getElementsByClassName('left');
    const BG_PREV = document.getElementsByClassName('right');

    let nextImage, prevImage;
    function getNextAndPrev() {
        let activeSlide = $('.active');

        if (activeSlide.next().length) {
        nextImage = activeSlide.next().find('img').attr('src')
        } else {
        nextImage = $('.carousel-inner').children().first().find('img').attr('src');
        }

        if (activeSlide.prev().length) {
        prevImage = activeSlide.prev().find('img').attr('src');
        } else {
        prevImage = $('.carousel-inner').children().last().find('img').attr('src');
        }

        $('.previmage').attr('src', prevImage);
        $('.nextimage').attr('src', nextImage);
    }
    getNextAndPrev();

    setInterval(getNextAndPrev, 200);
    BG_NEXT[0].addEventListener('click', function(){
        getNextAndPrev();
        BG_NEXT[0].style.background = "url('"+ nextImage+ "'";
    });
    BG_PREV[0].addEventListener('click', function(){
        getNextAndPrev();
        BG_PREV[0].style.background = "url('"+ prevImage+ "'";
    });
    BG_NEXT[0].addEventListener('mouseover', function(){
        BG_NEXT[0].style.background = "url('"+ nextImage+ "'";
    });
    BG_NEXT[0].addEventListener('mouseout', function(){
        BG_NEXT[0].style.background = "rgba(0,0,0,0.3)";
    });

    BG_PREV[0].addEventListener('mouseover', function(){
        BG_PREV[0].style.background = "url('"+ prevImage+ "'";
    });
    BG_PREV[0].addEventListener('mouseout', function(){
        BG_PREV[0].style.background = "rgba(0,0,0,0.3)";
    });
    </script>
</section>