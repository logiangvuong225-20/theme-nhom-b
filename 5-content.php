<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="content-ex">
  <div class="container">
    <div class="explore">
      <div class="bd-top"></div>
      <h4>EXPLORE OUR FEATURES</h4>
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="row-text-small-feature">
            <div class="row">
              <div class="col-1">
                <span class="fa fa-heart accent icon"></span>
              </div>
              <div class="col-11">
                <div class="content">
                  <h5>Fihshing Boats</h5>
                  <p>
                    Aliquam erat volutpat. Aliquam fringilla vulputate dolor eu
                    gravida.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row-text-small-feature">
            <div class="row">
              <div class="col-1">
                <span class="fa fa-wrench accent icon"></span>
              </div>
              <div class="col-11">
                <div class="content">
                  <h5>FISHING EQUIPMENTS</h5>
                  <p>
                    Aliquam erat volutpat. Aliquam fringilla vulputate dolor eu
                    gravida.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row-text-small-feature">
            <div class="row">
              <div class="col-1">
              <span class="fab fa-cc-mastercard icon"></span>
                        </div>
              <div class="col-11">
                <div class="content">
                  <h5>Online Booking</h5>
                  <p>
                    Aliquam erat volutpat. Aliquam fringilla vulputate dolor eu
                    gravida.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row-text-small-feature">
            <div class="row">
              <div class="col-1">
                <span class="fa fa-flag accent icon"></span>
              </div>
              <div class="col-11">
                <div class="content">
                  <h5>FISHING COMPETITION</h5>
                  <p>
                    Aliquam erat volutpat. Aliquam fringilla vulputate dolor eu
                    gravida.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row-text-small-feature">
            <div class="row">
              <div class="col-1">
                <span class="fa fa-users accent icon"></span>
              </div>
              <div class="col-11">
                <div class="content">
                  <h5>Our Experts Guidence</h5>
                  <p>
                    Aliquam erat volutpat. Aliquam fringilla vulputate dolor eu
                    gravida.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <img src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/07/lady2-1.jpg" alt="Hinh cau ca">
        </div>
      </div>
    </div>
  </div>
</div>
