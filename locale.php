<?php
function is_localhost() {
    $addr = $_SERVER['REMOTE_ADDR'];
    return $addr == '::1' || $addr == '127.0.0.1' || substr($addr, 0, 8) == '192.168.';
}

function get_date_format($lang) {
    switch ($lang) {
        case 'ja_JP': return 'l, Y F j, H:i:s';
        case 'zh_CN': return 'l, Y F j, H:i:s';
        case 'en_US': return 'l, F j Y, H:i:s';
        default: return 'l, j F Y, H:i:s';
    }
}

if (empty($_GET['hl'])) {
    $lang = 'en_GB';
} else {
    if ($_GET['hl'] == 'en-us') {
        $lang = 'en_US';
    } else if ($_GET['hl'] == 'jp') {
        $lang = 'ja_JP';
    } else if ($_GET['hl'] == 'zh') {
        $lang = 'zh_CN';
    } else if ($_GET['hl'] == 'ru') {
        $lang = 'ru_RU';
    } else if ($_GET['hl'] == 'de') {
        $lang = 'de_DE';
    } else {
        $lang = 'en_GB';
    }
    if (is_localhost()) {
        setcookie('lang', $lang, array(
            'expires' => 2147483647,
            'path' => '/',
            'samesite' => 'Strict'
        ));
    } else {
        setcookie('lang', $lang, array(
            'expires' => 2147483647,
            'path' => '/',
            'secure' => true,
            'samesite' => 'Strict'
        ));
    }
    $page = preg_split('/\?/', $_SERVER['REQUEST_URI'])[0];
    header("Location: {$page}", true, 303);
    exit();
}
if (isset($_COOKIE['lang'])) {
    $lang = str_replace('"', '', $_COOKIE['lang']);
}
$locale = $lang . '.UTF-8';
setlocale(LC_ALL, $locale);
bindtextdomain($lang, 'locale');
textdomain($lang);
?>
