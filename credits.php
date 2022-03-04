<!doctype html>

<?php include 'locale.php' ?>

<html lang="<?php echo $lc ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo _('Credits') ?> - Touhou World Cup</title>
	<link rel="stylesheet" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website">
	<meta property="og:title" content="Touhou World Cup" />
	<meta property="og:description" content="Credits to the creators of this website" />
	<meta property="og:site_name" content="Touhou World Cup" />
	<meta property="og:image" content="/twc.png" />
</head>

<body>
	<header class="header">
	<a href="/<?php echo query_string() ?>" class="logo">Touhou World Cup</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
	<ul class="menu">
		<li><a class="subpage" href="rules<?php echo query_string() ?>"><?php echo _('Rules') ?></a></li>
		<li><a class="subpage" href="schedule<?php echo query_string() ?>"><?php echo _('Schedule') ?></a></li>
		<li><a class="subpage" href="iscore<?php echo query_string() ?>"><?php echo _('ISCORE') ?></a></li>
		<li><a class="subpage" href="credits<?php echo query_string() ?>"><?php echo _('Credits') ?></a></li>
	</ul>
    <ul class="menu">
        <li<?php echo $lang == 'en_GB' ? ' class="selected"' : '' ?>><a id="en_GB" class="language" href="?hl=en-gb">
            <img src="/assets/uk.png" alt="<?php echo _('Flag of the United Kingdom') ?>" title="English (UK)">
        </a></li>
        <li<?php echo $lang == 'en_US' ? ' class="selected"' : '' ?>><a id="en_US" class="language" href="?hl=en-us">
            <img src="/assets/us.png" alt="<?php echo _('Flag of the United States') ?>" title="English (US)">
        </a></li>
        <li<?php echo $lang == 'ja_JP' ? ' class="selected"' : '' ?>><a id="ja_JP" class="language" href="?hl=jp">
            <img src="/assets/japan.png" alt="<?php echo _('Flag of Japan') ?>" title="日本語">
        </a></li>
        <li<?php echo $lang == 'zh_CN' ? ' class="selected"' : '' ?>><a id="zh_CN" class="language" href="?hl=zh">
            <img src="/assets/china.png" alt="<?php echo _('Flag of the P.R.C.') ?>" title="简体中文">
        </a></li>
        <li<?php echo $lang == 'ru_RU' ? ' class="selected"' : '' ?>><a id="ru_RU" class="language" href="?hl=ru">
            <img src="/assets/russia.png" alt="<?php echo _('Flag of Russia') ?>" title="Русский">
        </a></li>
        <li<?php echo $lang == 'de_DE' ? ' class="selected"' : '' ?>><a id="de_DE" class="language" href="?hl=de">
            <img src="/assets/germany.png" alt="<?php echo _('Flag of Germany') ?>" title="Deutsch">
        </a></li>
    </ul>
	</header>
	<div class="moverdowner"></div>
	<main>
	<h1><?php echo _('Credits') ?></h1>
	<h2><a href="https://github.com/touhouworldcup/touhouworldcup.github.io"><?php echo _('Website Source Code') ?></a></h2>
	<p><?php echo _('Developed by:') ?><ul class="list">
        <li><a href="https://www.youtube.com/channel/UChyVpooBi31k3xPbWYsoq3w" target="_blank">32th System</a></li>
        <li><a href="https://twitter.com/MaribelHearn42" target="_blank">Maribel Hearn</a></li>
    </ul></p>
	<p><?php echo _('Translated by:') ?><ul class="list">
        <li><a href="https://twitter.com/toho_yumiya" target="_blank"><?php echo ($lang == 'ja_JP' ? 'ゆーみや' : 'Yu-miya') ?></a><?php echo _(': Japanese') ?></li>
        <li><a href="https://space.bilibili.com/107846194" target="_blank">Komeiji Compiler</a><?php echo _(': Chinese') ?></li>
        <li><a href="https://www.youtube.com/channel/UC7QqmWFA-hAyrP5C1c2b-Iw" target="_blank">KVS</a><?php echo _(': Russian') ?></li>
        <li><a href="https://twitter.com/Kawaii_Shadowii" target="_blank">Kawaii_Shadowii</a><?php echo _(': German') ?></li>
    </ul></p>
	</main>
</body>
</html>
