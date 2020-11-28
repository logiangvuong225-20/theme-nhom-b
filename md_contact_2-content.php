<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="md_contact_2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact_field">
                    <h4 class="contact_header">
                        NAME
                    </h4>
                    <input data-validation="required" class="form-control" type="text" name="realname" placeholder="name*">
                </div>
                <div class="contact_field">
                    <h4 class="contact_header">
                        PHONE NO
                    </h4>
                    <input data-validation="required" class="form-control" type="number" name="phone" placeholder="phone no*">
                </div>
                <div class="contact_field">
                    <h4 class="contact_header">
                        EMAIL
                    </h4>
                    <input data-validation="required" class="form-control" type="email" name="email" placeholder="email*">
                </div>
                <div class="contact_field">
                    <h4 class="contact_header">
                        SUBJECT
                    </h4>
                    <input data-validation="required" class="form-control" type="text" name="subject" placeholder="subject*">
                </div>
            </div>
            <div class="col-md-6">
            <div class="contact_field">
                    <h4 class="contact_header">
                        YOUR MESSAGE
                    </h4>
                    <textarea data-validation="required" class="form-control" name="yourmessage" id="message" rows="10" placeholder="your message"></textarea>
                </div>
            </div>
        </div>
        <a href="#" class="btn-accent">
                    send message
                    <i class="fas fa-long-arrow-alt-right"></i>
                </a>
    </div>
</section>