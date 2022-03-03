<?php
function get_date_format($lang) {
    switch ($lang) {
        case 'ja_JP': return 'l, Y F j, H:i:s';
        case 'zh_ZH': return 'l, Y F j, H:i:s';
        default: return 'l, j F Y, H:i:s';
    }
}

if (empty($_GET['hl']) || $_GET['hl'] == 'en-gb' || $_GET['hl'] == 'en') {
    $lang = 'en_US';
} else if ($_GET['hl'] == 'en-us') {
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
    $lang = 'en_US';
}
if (!empty($_GET['hl'])) {
    setcookie('lang', $lang, array(
        'expires' => 2147483647,
        'path' => '/',
        'secure' => true,
        'samesite' => 'Strict'
    ));
} else {
    if (isset($_COOKIE['lang'])) {
        $lang = str_replace('"', '', $_COOKIE['lang']);
    }
}
$locale = $lang . '.UTF-8';
setlocale(LC_ALL, $locale);
bindtextdomain($lang, 'locale');
textdomain($lang);
?>
