<!doctype html>

<?php include_once 'locale.php'; require_once 'mobile_detect.php' ?>

<html lang="<?php echo $lc ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo _('Rules') ?> - Touhou World Cup</title>
	<link rel="stylesheet" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The rules that all Touhou World Cup players have to abide by">
    <meta name="keywords" content="touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2022 competition, scoring, survival, tournament, rules">

	<meta property="og:type" content="website">
	<meta property="og:title" content="Touhou World Cup" />
	<meta property="og:description" content="The rules that all Touhou World Cup players have to abide by" />
	<meta property="og:site_name" content="Touhou World Cup" />
	<meta property="og:image" content="/twc.png" />
</head>

<body>
	<header class="header">
	<a href="/<?php echo query_string() ?>" class="logo">Touhou World Cup</a>
	<input class="menu-btn" type="checkbox" id="menu-btn">
	<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
	<ul class="menu">
		<li><a class="subpage" href="rules<?php echo query_string() ?>"><?php echo _('Rules') ?></a></li>
		<li><a class="subpage" href="schedule<?php echo query_string() ?>"><?php echo _('Schedule') ?></a></li>
		<li><a class="subpage" href="iscore<?php echo query_string() ?>"><?php echo _('ISCORE') ?></a></li>
		<li><a class="subpage" href="credits<?php echo query_string() ?>"><?php echo _('Credits') ?></a></li>
        <?php
            $detect_device = new Mobile_Detect;
            $is_mobile = $detect_device -> isMobile();
            if ($is_mobile) {
                echo '<li><a class="subpage" href="language' . query_string() . '"><img src="/assets/lang.png" alt="Language"></a></li>';
            }
        ?>
	</ul>
    <ul class="languages">
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
	<h1 id='rules'><?php echo _('Rules') ?></h1>
    <h2><?php echo _('Format') ?></h2>
    <p><?php echo _('For every match, each team can earn points. Ranking is based on whoever has the most points:') ?></p>
    <ul>
        <li><?php echo _('1st place - 2 points') ?></li>
        <li><?php echo _('2nd place - 1 point') ?></li>
        <li><?php echo _('3rd place - 0 points') ?></li>
    </ul>
    <p><?php echo _('In 2-team matches, the first place gets 2 points, and 2nd place gets 1 point.') ?></p>
    <p><?php
        echo _('If multiple players have the exact same amount of ISCORE, their points will be split equally. ' .
        'This also means that, if multiple players have the highest ISCORE, the match ends in a tie.');
    ?></p>
    <p><?php echo _('At the end of the World Cup, the teams will be ranked based on has the most points.') ?></p>
    <hr>
    <h2><?php echo _('Calculating Points') ?></h2>
    <p><?php
        echo _('The points are based on the ' .
        '<a href="/iscore">ISCORE calculator</a>.');
    ?></p>
    <p><?php
        echo _('Score matches are calculated based on the ISCORE formula. ' .
        'Survival matches (except for GFW) are calculated as follows:');
    ?></p>
    <p><tt><?php echo _('(ISCORE No Miss No Bomb Score) / 2 ^ (deaths)') ?></tt></p>
    <p><?php echo _('In survival runs, bombs are counted as 2 deaths.') ?></p>
    <p><?php
        echo _('ISCORE is a scoring metric that compensates for the differences in performance ' .
        'between shot types and categories. The formulas used can be found in the ISCORE rubric ' .
        'with the calculator linked above.');
    ?></p>
    <hr>
    <h2><?php echo _('Game-specific Concerns') ?></h2>
    <h3><?php echo _('Touhou 7') ?></h3>
    <p><?php echo _('A border break is considered a death in survival runs.') ?></p>
    <h3><?php echo _('Touhou 8') ?></h3>
    <p><?php
        echo _('Getting hit during a Last Spell is <strong>not</strong> considered a death in survival runs. '.
        'However, ISCORE gives a higher base value in this game to runs that capture all spells ' .
        '(which includes unlocking and capturing <strong>every</strong> Last Spell) AND do not die/bomb ' .
        '(NN + Full-SC).');
    ?></p>
    <h3><?php echo _('Touhou 12') ?></h3>
    <p>
    </p>
    <p><?php
        echo _('Summoning a UFO is considered a death in survival runs. ' .
        'However, collecting tokens does not affect the score in survival runs.');
    ?></p>
    <h3><?php echo _('Touhou 12.8') ?></h3>
    <p></p>
    <p><?php echo _('The survival formula for this game is (gold medals*1.5)-(deaths).') ?></p>
    <h3><?php echo _('Touhou 13') ?></h3>
    <p><?php
        echo _('A manual trance is considered 2 deaths in survival runs. ' .
        'ISCORE gives a higher base value in this game to runs that capture all spells AND does not die/bomb ' .
        '(NN + Full-SC).');
    ?></p>
    <h3><?php echo _('Touhou 15') ?></h3>
    <p><?php echo _('All runs in both survival/score have to be done in Legacy Mode.') ?></p>
    <h3><?php echo _('Touhou 16') ?></h3>
    <p><?php echo _('Releasing your season gauge is considered 2 deaths in survival runs.') ?></p>
    <h3><?php echo _('Touhou 17') ?></h3>
    <p><?php
        echo _('Channeling a berserk roar (3 or more of the same animal tokens during roar mode) ' .
        'is considered 2 deaths in survival runs. Breaking your roar ' .
        '(bombing or touching a bullet during roar mode) is considered a death in survival runs.');
    ?></p>
    <hr>
    <h2><?php echo _('Use of Third Party Software &amp; Material') ?></h2>
    <p><?php
        echo _('Vsync patch is allowed. Practice patches (such as thprac) are allowed, ' .
        'but all practice cheats have to be disabled for the runs.');
    ?></p>
    <p><?php
        echo _('Visual patches (e.g. hitbox patch) are prohibited. Translation patches are allowed but discouraged. ' .
        'Audio patches/background music is allowed but no copyrighted material.');
    ?></p>
    <hr>
    <h2><?php echo _('Other Rules') ?></h2>
    <ul><?php
        echo _('<li>Runs only count from the moment the timer has started.</li>' .
        '<li>Players can start as many runs as they want during the match. ' .
        'When the timer has finished on stream, no new runs can be started anymore.</li>' .
        '<li>A clear is always better than a gameover, no matter the score difference.</li>' .
        '<li>The players have to stream their gameplay. Just stream game footage: ' .
        'no overlay that shapes/crops the stream.</li>' .
        '<li>Streamers are allowed to have elements (images, input displays, cameras, etc.) on top of their game. ' .
        'However, the gameplay window, as well as all information on the player\'s HUD, ' .
        'has to be visible at all times.</li><li>Finished runs need their replays saved.</li>' .
        '<li>Please hide the story ending when your run finishes.</li>');
    ?></ul>
	</main>
</body>
</html>
