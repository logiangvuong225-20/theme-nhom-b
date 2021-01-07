<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 <section class="md_11">
     <div class="container">
            <div class="md_11_title">
                PLANS & PRICINGS
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Regular plan</h5>
                            <div class="card_price">
                                29<sup>$</sup>
                            </div>
                            <div class="card_price_sub">
                                / per month
                            </div>
                            <p class="card_text">
                                free security service <br>
                                Basic fishing stick <br>
                                20 Fishing Lure's <br>
                                Safely Equipments <br>
                                Regular Life Jacket
                            </p>
                            <button class="md_11_btn">order now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card active">
                        <div class="card-body">
                            <h5 class="card-title">stadard plans</h5>
                            <div class="card_price">
                                49<sup>$</sup>
                            </div>
                            <div class="card_price_sub">
                                / per month
                            </div>
                            <p class="card_text">
                                free security service <br>
                                Basic fishing stick <br>
                                30 Fishing Lure's <br>
                                Safely Equipments <br>
                                Regular Life Jacket
                            </p>
                            <button class="md_11_btn">order now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">premium plan</h5>
                            <div class="card_price">
                                79<sup>$</sup>
                            </div>
                            <div class="card_price_sub">
                                / per month
                            </div>
                            <p class="card_text">
                                free security service <br>
                                Basic fishing stick <br>
                                50 Fishing Lure's <br>
                                Diving Equipments <br>
                                Regular Life Jacket
                            </p>
                            <button class="md_11_btn">order now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ultimate plan</h5>
                            <div class="card_price">
                                119<sup>$</sup>
                            </div>
                            <div class="card_price_sub">
                                / per month
                            </div>
                            <p class="card_text">
                                free security service <br>
                                Fishing Rod whith wheel <br>
                                100 Fishing Lure's <br>
                                Safely Equipments <br>
                                Secured Life Jacket
                            </p>
                            <button class="md_11_btn">order now</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>