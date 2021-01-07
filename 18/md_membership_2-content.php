<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="md_membership_2">
        <div class="membership">
                <hr>
                    <h4>club membership</h4>
                    <ul>
                        <li>
                            <h5>
                            Family Membership is defined as a married couple or single person with children under the age of 18.
                            </h5>
                        </li>
                        <li>
                            <h5>
                            Family or Individual membership is $800 per year.
                            </h5>
                        </li>
                        <li>
                            <h5>
                            Corporate membership is $4000 per year.
                            </h5>
                        </li>
                        <li>
                            <h5>
                            Multi-family group membership.
                            </h5>
                        </li>
                        <li>
                            <h5>
                            Special Membership.
                            </h5>
                        </li>
                        <li>
                            <h5>
                            Summer Membership.
                            </h5>
                        </li>
                    </ul>
    </div>
</section>