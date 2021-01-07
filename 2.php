<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/2.less', 'css/2.css');
$less->compileFile('less/3.less', 'css/3.css');
$less->compileFile('less/5.less', 'css/5.css');
$less->compileFile('less/a1.less', 'css/a1.css');
$less->compileFile('less/a3.less', 'css/a3.css');
$less->compileFile('less/m1.less', 'css/m1.css');
$less->compileFile('less/g1.less', 'css/g1.css');

$less->compileFile('less/e1.less', 'css/e1.css');
$less->compileFile('less/s2.less', 'css/s2.css');
$less->compileFile('less/s6.less', 'css/s6.css');
$less->compileFile('less/b1.less', 'css/b1.css');
$less->compileFile('less/check-5.less', 'css/check-5.css');
$less->compileFile('less/check-1.less', 'css/check-1.css');
$less->compileFile('less/check-2.less', 'css/check-2.css');
$less->compileFile('less/search-1.less', 'css/search-1.css');
$less->compileFile('less/cart-1.less', 'css/cart-1.css');
$less->compileFile('less/detail-1.less', 'css/detail-1.css');
$less->compileFile('less/sidebar-1.less', 'css/sidebar-1.css');
$less->compileFile('less/404.less', 'css/404.css');




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="<?php echo $url_path ?>/css/2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/5.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/a1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/a3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/m1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/e1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/g1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/s2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/s6.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/b1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/check-5.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/check-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/check-2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/search-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/cart-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/detail-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/sidebar-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/404.css" rel="stylesheet" type="text/css" />



    <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <script
        src='https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007714979/custom/page/hack-a-thon-3/masonry.min.min.js'>
    </script>
    <script
        src='https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007849180/custom/page/hack-a-thon-3/isotope.min.js'>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="./js/g1.js"></script>

    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2.less', 'css/2.css');
        $less->compileFile('less/5.less', 'css/5.css');
        $less->compileFile('less/3.less', 'css/3.css');
        $less->compileFile('less/a1.less', 'css/a1.css');
        $less->compileFile('less/a3.less', 'css/a3.css');
        $less->compileFile('less/m1.less', 'css/m1.css');
        $less->compileFile('less/e1.less', 'css/e1.css');
        $less->compileFile('less/g1.less', 'css/g1.css');
        $less->compileFile('less/s2.less', 'css/s2.css');
        $less->compileFile('less/s6.less', 'css/s6.css');
        $less->compileFile('less/b1.less', 'css/b1.css');
        $less->compileFile('less/check-5.less', 'css/check-5.css');
        $less->compileFile('less/check-1.less', 'css/check-1.css');
        $less->compileFile('less/check-2.less', 'css/check-2.css');
        $less->compileFile('less/search-1.less', 'css/search-1.css');
        $less->compileFile('less/cart-1.less', 'css/cart-1.css');
        $less->compileFile('less/detail-1.less', 'css/detail-1.css');
        $less->compileFile('less/sidebar-1.less', 'css/sidebar-1.css');
        $less->compileFile('less/404.less', 'css/404.css');

        ?>
</head>

<body>
    <?php include './2-content.php'; ?>
    <?php include './3-content.php'; ?>




</body>

</html>