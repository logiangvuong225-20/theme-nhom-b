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
$less->compileFile('less/139.less', 'css/139.css');
$less->compileFile('less/m3.less', 'css/m3.css');
$less->compileFile('less/m3.less', 'css/e3.css');
$less->compileFile('less/s1.less', 'css/s1.css');
$less->compileFile('less/s3.less', 'css/s3.css');
$less->compileFile('less/check-out-9.less', 'css/check-out-9.css');
$less->compileFile('less/check-out-8.less', 'css/check-out-8.css');
$less->compileFile('less/c1.less', 'css/c1.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>139</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/139.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/m3.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/e3.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/s1.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/s3.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/check-out-9.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/check-out-8.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/check-out-4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/c1.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/139.less', 'css/139.css');
        $less->compileFile('less/m3.less', 'css/m3.css');
        $less->compileFile('less/e3.less', 'css/e3.css');
        $less->compileFile('less/s1.less', 'css/s1.css');
        $less->compileFile('less/s3.less', 'css/s3.css');
        $less->compileFile('less/check-out-9.less', 'css/check-out-9.css');
        $less->compileFile('less/check-out-8.less', 'css/check-out-8.css');
        $less->compileFile('less/check-out-4.less', 'css/check-out-4.css');
        $less->compileFile('less/c1.less', 'css/c1.css');
        ?>
    </head>
    <body >
        <?php include '../139/139-content.php'; ?>
        <br>
        <?php include 'm3.php'; ?>
        <br>
        <?php include 'e3.php'; ?>
        <br>
        <?php include 's1.php'; ?>
        <br>
        <?php include 's3.php'; ?>
        <br>
        <?php include 'check-out-9.php'; ?>
        <br>
        <?php include 'check-out-8.php'; ?>
        <br>
        <?php include 'check-out-4.php'; ?>
        <br>
        <?php include 'c1.php'; ?>
        
    </body>
</html>