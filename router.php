<?php
$uri = $_SERVER["REQUEST_URI"];
if (strlen($uri) > 1 && preg_match('/\/[a-z]+$/', $uri)) {
    include_once str_replace('/', '', $uri) . '.php';
} else { 
    return false;
}
?>