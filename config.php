<?php
error_reporting(0);
$serverDomain = "https://vkrfork.ml";
$myDomain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$dlAPI = ""; //Downloader Api Key
$searchAPI = ""; //Search Api Key
?>
