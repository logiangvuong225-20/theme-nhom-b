<?php
   $url_host = $_SERVER['HTTP_HOST'];
   
   $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
   
   $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
   
   preg_match_all($pattern_uri, __DIR__, $matches);
   
   $url_path = $url_host . $matches[1][0];
   
   $url_path = str_replace('\\', '/', $url_path);
   ?>
<div class="module-56">

    <div class="container">
        <div class="our">
            <hr>
            <h5>OUR CLIENT </h5>

        </div>
        <section class="blog_section">
            <div class="container">
                <div class="blog_content">
                    <div class="owl-carousel owl-theme">
                        <div class="blog_item " style="margin:0 100px;">
                            <div class="blog_image">
                                <img class="img-fluid"
                                    src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/logos1_0004_PREMIUM-REPAIR-1.png"
                                    alt="images not found">
                            </div>

                        </div>
                        <div class="blog_item" style="margin:0 100px;">
                            <div class="blog_image">
                                <img class="img-fluid"
                                    src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/logos1_0004_PREMIUM-REPAIR-1.png"
                                    alt="images not found">
                            </div>

                        </div>
                        <div class="blog_item" style="margin:0 100px;">
                            <div class="blog_image">
                                <img class="img-fluid"
                                    src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/logos1_0002_IF-YOUR-DREAMS-DON%E2%80%99T-SCARE-YOU-1.png"
                                    alt="images not found">
                            </div>

                        </div>
                        <div class="blog_item" style="margin:0 100px;">
                            <div class="blog_image">
                                <img class="img-fluid"
                                    src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/logos1_0004_PREMIUM-REPAIR-1.png"
                                    alt="images not found">
                            </div>

                        </div>
                        <div class="blog_item" style="margin:0 100px;">
                            <div class="blog_image">
                                <img class="img-fluid"
                                    src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/logos1_0000_NEW-BRAND-1.png"
                                    alt="images not found">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>