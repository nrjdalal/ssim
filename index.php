<?php

define('name', 'ssim');

$parsedURL = parse_url($_SERVER["REQUEST_URI"]);

$url = explode('/', $parsedURL["path"]);

$url[1] = ($url[1] == "") ? "index" : $url[1];

$filename = "views/$url[1].php";

if (file_exists($filename)) {
    include $filename;
} else {
    header('HTTP/1.1 404 Not Found');
    include "views/404.php";
}
