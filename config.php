<?php
error_reporting(0);
$serverDomain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$myDomain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/demo";
$dlAPI = "VKrFork"; //Downloader Api Key
$searchAPI = "VKrFork"; //Search Api Key
?>