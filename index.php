<?php require_once("body/header.php");
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
// echo $path=str_replace('/','',$url);


if ($path == "/index.php" || $path == "/") {

    include_once("pages/home.php");
} else {
    if (file_exists("pages/$path")) {
        include_once("pages/$path");
    } else {
        include_once("pages/home.php");
    }

}


require_once("body/footer.php"); ?>