<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="md_search_2">
    <form id="frmSearch" class="search_form col-sm-10 col-md-offset-1 col-sm-offset-1" action="#">
        <input class="search_input" type="text" name="key" placeholder="Search for something">
        <a href="javascript:closeSearch()">
            <i class="fa fa-times"></i>
        </a>
    </form>
    <script>
        function closeSearch(){
            document.getElementById('frmSearch').style.display = "none";
        }
    </script>
</section>