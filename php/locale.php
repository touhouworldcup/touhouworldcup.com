<?php
function is_localhost() {
    $addr = $_SERVER['REMOTE_ADDR'];
    return $addr == '::1' || $addr == '127.0.0.1' || substr($addr, 0, 8) == '192.168.';
}

function get_date_format(string $lang) {
    switch ($lang) {
        case 'en_US': return '%A, %B %e, %Y, %H:%M:%S';
        case 'ja_JP': return '%Y年%B%e日%A, %H:%M:%S';
        case 'zh_CN': return '%Y年%B%e日%A, %H:%M:%S';
        case 'ru_RU': return '%A, %e %B %Y года, %H:%M:%S';
        case 'de_DE': return '%A, %e. %B %Y, %H:%M:%S Uhr';
        case 'es_ES': return '%A %e de %B de %Y, %H:%M:%S';
        default: return '%A, %e %B %Y, %H:%M:%S';
    }
}

function query_string() {
    if (isset($_SERVER['QUERY_STRING'])) {
        $query = preg_split('/=/', $_SERVER['QUERY_STRING']);
        if ($query[0] == 'hl') {
            return '?' . implode('=', $query);
        }
    }
    return '';
}

function parse_accept_language() {
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $langs = glob('locale' . '/*' , GLOB_ONLYDIR);
        $lang = str_replace('-', '_', preg_split('/,/', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0]);
        return (in_array($lang, $langs) ? $lang : 'en_GB');
    }
    return 'en_GB';
}

function check_hl(string $hl) {
    switch ($hl) {
        case 'en-us': return 'en_US';
        case 'jp': return 'ja_JP';
        case 'zh': return 'zh_CN';
        case 'ru': return 'ru_RU';
        case 'de': return 'de_DE';
        case 'es': return 'es_ES';
        default: return 'en_GB';
    }
}

if (empty($_GET['hl'])) {
    $lang = parse_accept_language();
    if ($lang == 'en_US') {
        $lang = 'en_GB';
    }
} else {
    $lang = check_hl($_GET['hl']);
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
    if (isset($_COOKIE['lang'])) {
        $page = preg_split('/\?/', $_SERVER['REQUEST_URI'])[0];
        header("Location: {$page}", true, 303);
        exit();
    }
}
if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
}
$locale = $lang . '.UTF-8';
$lc = preg_split('/_/', $lang)[0];
setlocale(LC_ALL, $locale);
bindtextdomain($lang, 'locale');
textdomain($lang);
?>
