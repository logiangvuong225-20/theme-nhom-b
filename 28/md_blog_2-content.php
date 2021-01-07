<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="md_blog_2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="accent">
                    posted on
                    <a class="post-date" href="#">july 16, 2016</a>
                </div>
                <a href="#">
                    <h4 class="accent-title">4 fun ways to enjoy boating</h4>
                </a>
                <div class="auth">
                    <h6> BY:
                        <a href="#">FISHINGCLUB</a>
                        / 5 COMMENTS / CATEGORIES: UNCATEGORIZED
                    </h6>
                </div>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="quotes">
                Ipsum is dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
                </p>
                <a href="#" class="btn-default">
                    Read more
                    <i class="fas fa-long-arrow-alt-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>