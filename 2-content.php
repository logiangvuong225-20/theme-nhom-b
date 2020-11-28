<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
  <div class="container">
      <div class="nav-header">
        <nav class="navbar navbar-expand-sm navbar-light">
          <a class="navbar-brand" href="#"
            ><img
              src="http://kamleshyadav.com/wp/fishing/wp-content/uploads/2016/09/Logo12.png"
              alt="logo"
          /></a>
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-toggle="collapse"
            data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">MENBERSHIP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">EVENT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">GALLERY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SHOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
              </li>
              <li class="nav-item menucart">
                <a class="nav-link" href="#">
                  <i class="fa fa-shopping-cart"></i
                ></a>
                <ul class="submenu"><li class="submenucart">
                    Helloo
                </li></ul>
              </li>
              <li class="nav-item menu-search">
                <a class="nav-link" href="#">  
                <i class="fa fa-search"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></i>
  </button></a>

 
              </li>
            </ul>
          </div>
        </nav>
        <div class="collapse" id="collapseExample">
  <div class="card card-body seach">
  <i class="fa fa-times" aria-hidden="true" style="
    position: absolute;
    right: 30px;
    padding-top: 6px;
    
" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></i>

<input type="text" name="search" id="search" > 

</div>
</div>
      </div>
    </div>