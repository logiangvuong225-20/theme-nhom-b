<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="module_1">
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <div class="contact_bar_left">
                   <ul>
                       <li>
                            <a href="#">
                                <i class="fas fa-envelope"></i>support@himanshusofttech.com
                            </a>
                       </li>
                       <li>
                            <a href="#">
                            <i class="fas fa-phone-alt"></i>0123456789
                            </a>
                       </li>
                   </ul>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="contact_bar_right">
                    <ul class="sns-link">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-vimeo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>