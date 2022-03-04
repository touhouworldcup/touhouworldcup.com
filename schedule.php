<!doctype html>

<?php include 'locale.php' ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo _('Schedule') ?> - Touhou World Cup</title>
	<link rel="stylesheet" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website">
	<meta property="og:title" content="Touhou World Cup" />
	<meta property="og:description" content="Order and time at which Touhou World Cup matches will happen" />
	<meta property="og:site_name" content="Touhou World Cup" />
	<meta property="og:image" content="/twc.png" />
</head>

<body>
	<header class="header">
	<a href="/" class="logo">Touhou World Cup</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
	<ul class="menu">
		<li><a class="subpage" href="rules"><?php echo _('Rules') ?></a></li>
		<li><a class="subpage" href="schedule"><?php echo _('Schedule') ?></a></li>
		<li><a class="subpage" href="iscore"><?php echo _('ISCORE') ?></a></li>
		<li><a class="subpage" href="credits"><?php echo _('Credits') ?></a></li>
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
	<h1><?php echo _('Schedule') ?></h1>
    <p><?php echo _('Your time zone was detected as <strong id="timezone">UTC+0000 (Coordinated Universal Time)</strong>.') ?></p>
    <p><?php
        if ($lang == 'en_GB' || $lang == 'en_US' || $lang == 'de_DE') {
            echo _('Daylight Saving Time (also known as Summer Time or DST) is taken into account automatically.');
        }
    ?></p>
    <table id="schedule_table">
        <thead>
            <tr>
                <th rowspan='3'><?php echo _('Date / Time') ?></th>
                <th rowspan='3'><?php echo _('Category') ?></th>
                <th rowspan='3'><?php echo _('Players') ?></th>
                <th rowspan='3'><?php echo _('Reset Time<br>(minutes)') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody">
        <noscript><?php
            $json = file_get_contents('schedule.json');
            $schedule = json_decode($json, true);
            $highlight = false;
            foreach ($schedule as $key => $match) {
                if (!$highlight && $key >= time()) {
                    echo '<tr class="highlight">';
                    $highlight = true;
                } else {
                    echo '<tr>';
                }
                echo '<td>' . gmdate(get_date_format($lang), $key) . '</td>';
                echo '<td class="' . preg_split('/ /', $match['category'])[0] . '">' . $match['category'] . '</td>';
                echo '<td>' . implode('<br>', $match['players']) . '</td>';
                echo '<td>' . ($match['reset'] === 0 ? 'N/A' : $match['reset']) . '</td>';
                echo '</tr>';

            }
        ?></noscript>
        </tbody>
    </table>
	</main>
    <script src="/schedule.js" defer></script>
</body>
</html>
