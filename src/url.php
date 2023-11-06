<?php
$url = null;

if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === 'on')   
	$url = "https://";   
else  
	$url = "http://";   

if (isset($_SERVER["HTTP_HOST"]) && isset($_SERVER["REQUEST_URI"])) {
	$url .= $_SERVER["HTTP_HOST"];
	$url .= $_SERVER["REQUEST_URI"];
}