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
$less->compileFile('less/md_contact_2.less', 'css/md_contact_2.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Module HOME 11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/md_contact_2.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/font-awesome/all.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $url_path ?>/js/jquery-3.5.1.min.js"></script>
        <script src="<?php echo $url_path ?>/js/md_contact_2.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/md_contact_2.less', 'css/md_contact_2.css');
        ?>
    </head>
    <body >
        <?php include '../30/md_contact_2-content.php'; ?>
    </body>
</html>