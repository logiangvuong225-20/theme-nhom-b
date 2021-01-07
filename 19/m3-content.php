<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section id="h-module-m3">
<hr>
<h4>CLUB RULES</h4>
<ul>
<li>All members and guests enter and use this property at their own risk..</li>
<li>Violation of any fish, and or wildlife laws.</li>
<li>Do not block the boat ramp.</li>
<li>No swimming at the boat ramp.</li>
<li>Rental space is available on a first come first served basis.</li>
<li>All members must operate their boats with safety.</li>
</ul>






</section>