<?php
header('Content-type: text/javascript');

function is_localhost(string $addr) {
    return $addr == '::1' || $addr == '127.0.0.1' || substr($addr, 0, 8) == '192.168.';
}

if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
    ob_start('ob_gzhandler');
} else {
    ob_start();
}
$page = empty($_GET['page']) ? 'index' : $_GET['page'];
$min = (!is_localhost($_SERVER['REMOTE_ADDR']) ? '-min' : '');
$path = '../js/' . $page . $min . '.js';
echo file_exists($path) ? file_get_contents($path) : '';
if ($page == 'twcscore') {
    echo file_get_contents('../js/twcscore_ui' . $min . '.js');
}
echo ';function close_menu(){menu.checked=false;lang.checked=false}' .
'function menu_func(event){if(menu_checked){menu_checked=false;return;}menu_checked=true;lang_checked=false;event.stopPropagation()}' .
'function lang_func(event){if(lang_checked){lang_checked=false;return;}lang_checked=true;menu_checked=false;event.stopPropagation()}' .
'function menu_handler(){menu=document.getElementById("menu-btn");lang=document.getElementById("lang-btn");close_menu();menu_checked=false;lang_checked=false;' .
'document.body.addEventListener("click", close_menu, false);menu.addEventListener("click", menu_func, false);lang.addEventListener("click", lang_func, false);}' .
'window.addEventListener("DOMContentLoaded",menu_handler,false)';
/*if ($page == 'index') {
    echo file_get_contents('https://platform.twitter.com/widgets.js');
}*/
?>
