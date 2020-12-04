<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-a3">
    <div class="content">
        <div class="container">
            <div class="header-md">
                <div class="bd-h"> </div>
                <h6 class="title-a3">MEET OUR TEAM </h6>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="holder">
                        <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/fisher2-1.png"
                            alt="cau ca">
                        <div class="content-in-card">

                            <p>Learn how to boat safely and responsibly with these tips from our boating experts. </p>
                            <div class="social-content">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                twter

                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                twter
                            </div>
                        </div>

                    </div>
                    <h6 class="title-card">JEFF WITTERS </h6>
                    <p class="tex-card">FISHERMAN</p>
                </div>

                <div class="col-md-4 col-12">
                    <div class="holder">
                        <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/47458019_Subscription_S-1.png"
                            alt="gai xinh">

                        <div class="content-in-card">

                            <p>Learn how to boat safely and responsibly with these tips from our boating experts. </p>
                            <div class="social-content">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                twter

                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                twter
                            </div>
                        </div>


                    </div>
                    <h6 class="title-card">JEFF WITTERS </h6>
                    <p class="tex-card">FISHERMAN</p>
                </div>
                <div class="col-md-4 col-12">
                    <div class="holder">
                        <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/Untitled-2-1.png"
                            alt="cau ca 2">
                        <div class="content-in-card">

                            <p>Learn how to boat safely and responsibly with these tips from our boating experts. </p>
                            <div class="social-content">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                twter

                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                twter
                            </div>
                        </div>

                    </div>
                    <h6 class="title-card">JEFF WITTERS </h6>
                    <p class="tex-card">FISHERMAN</p>
                </div>
            </div>

        </div>
    </div>
</div>