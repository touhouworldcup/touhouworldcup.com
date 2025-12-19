<?php
header('Content-type: text/css');
$css = array('icons', 'shared', empty($_GET['page']) ? 'main' : $_GET['page']);
foreach ($css as $css_file) {
    $path = '../css/' . $css_file . '.css';
    echo file_exists($path) ? file_get_contents($path) : '';
    if ($css_file == 'twcscore') {
        include_once 'sprite_gen.php';
    }
}
?>
