<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-3">
  <div class="content">
    <div
      id="carouselExampleFade"
      class="carousel slide carousel-fade"
      data-ride="carousel"
    >

      <div class="carousel-inner">
        <div class="carousel-item active">

          <img
            src="./images/banner-fishing-in-dubaia6.jpg"
            class="d-block w-100 responsive"
            alt="..."
          />
       <div class="content-incar">
       <div class="wl-to rs-layer1 animate__animated animate__flipInX animate__delay-1s">WELLCME TO FISHING</div>
       <p class="les-lay animate__animated animate__fadeInLeft animate__delay-2s">LEST GO'S</p>
       <p class="h-lay animate__animated animate__fadeInRight animate__delay-2s">FISHING</p>
       <a href="#" class="start-he animate__animated animate__fadeInRight animate__delay-3s">START HE</a>
       </div>

        </div>
        <div class="carousel-item">
          <img src="./images/banner-2.jpg" class="d-block w-100 responsive" alt="..." />
  <div class="content-incar2 animate__animated animate__fadeIn animate__delay-1s">
    <p class="h-lay2">GREAD UP FOR </p>
    <p class="les-lay2"> HELOOO</p>
    <a href="#" class="now-he">NOW!</a>
  </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleFade"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon pre-nex" aria-hidden="true">
          <i class="fa fa-chevron-left fa-icon" aria-hidden="true"></i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleFade"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon pre-nex" aria-hidden="true"
          ><i class="fa fa-chevron-right fa-icon" aria-hidden="true"></i>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
