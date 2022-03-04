<!doctype html>

<?php include 'locale.php' ?>

<html lang="<?php echo $lc ?>">
<head>
	<meta charset="utf-8">
	<title>Touhou World Cup</title>
	<link rel="stylesheet" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The official Touhou World Cup website">
    <meta name="keywords" content="touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2022 competition, scoring, survival, tournament">

	<meta property="og:type" content="website">
	<meta property="og:title" content="Touhou World Cup" />
	<meta property="og:description" content="Main page of the Touhou World Cup website" />
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
    <ul class="menu languages">
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
	<h1>Touhou World Cup</h1>
    <p><?php
        echo _('<strong>Touhou World Cup (TWC)</strong> is an annual international Touhou shooting game competition, ' .
        'first held in 2020, organised by the Chinese gameplay community. ' .
        'This time around, in 2021, it is organised by the Western gameplay community.');
    ?></p>
    <p><?php
        echo _('Three teams, a Western community team, a Chinese team, and a Japanese team, duke it out ' .
        'on Lunatic and Extra mode, playing on live streams and playing both high score and survival.');
    ?></p>
    <p><?php
        echo _('See below for official communication channels and live streams with commentary.');
    ?></p>
	<ul class="list">
		<li><a href="https://twitter.com/touhouworldcup"><?php echo _('Official TWC Twitter') ?></a></li>
		<li><a href="https://www.youtube.com/channel/UCk8o-jk-Zpn4CEmLUIkui0A"><?php echo _('Official TWC YouTube Channel') ?></a></li>
		<li><a href="https://www.twitch.tv/touhou_replay_showcase"><?php echo _('English commentary stream (Twitch)') ?></a></li>
		<li><a href="https://live.bilibili.com/22478102?share_source=copy_link"><?php echo _('Chinese commentary stream 1 (Bilibili)') ?></a></li>
		<li><a href="https://live.bilibili.com/14315174?share_source=copy_link"><?php echo _('Chinese commentary stream 2 (Bilibili)') ?></a></li>
		<li><a href="https://www.youtube.com/channel/UCfF3O4wo0YxppTZGmtTGDwg"><?php echo _('Japanese commentary stream (YouTube)') ?></a></li>
		<li><a class="dead" href="https://www.twitch.tv/touhou_russian_kolkhoz"><?php echo _('Russian commentary stream (Twitch)') ?></a></li>
	</ul>
	</main>
</body>
</html>
